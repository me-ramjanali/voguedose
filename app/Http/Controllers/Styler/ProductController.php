<?php

namespace App\Http\Controllers\Styler;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Orders;
use App\Products;
use Auth;
use Storage;
use File;
use DB;
use Response;

class ProductController extends Controller
{
	public function __construct()
    {
        $this->middleware('styler');
        $newOrders = Orders::select('orders.*', 'customer_name as user')
                            ->where('process_status', 1)
                            ->where('assign_to', Auth::guard('styler')->user()->id)
                            ->orderBy('created_at', 'desc')
                            ->get();
        $this->data = array(
                    'newRequests' => $newOrders
                );
    }

    public function inventory(Products $product){
        $total_products = Products::count();
        $this->data['total_products'] = $total_products;
        $this->data['types'] = $product->getAllTypes();
        $this->data['colors'] = $product->getAllColors();
        $this->data['fits'] = $product->getAllFits();
        $this->data['sizes'] = $product->getAllSizes();
        $this->data['active'] = 'inventory';
        $this->data['code'] = $this->make_product_code();
        return view('styler/inventory/products')->with($this->data);
    }

    public function make_product_code(){        
        $check = Products::get()->last();
        if(count($check) > 0){
            $code = 'tb'.str_pad((str_replace('tb', '', $check->code)+1), 4, "0", STR_PAD_LEFT);
        }else{
        	$code = 'tb0001';
        }
        return $code;
    }

    public function createProduct(Request $request)
    {
    	$data = json_decode($request->info);
    	$files = $request->file('files');
    	$file_names = [];
    	if($request->hasFile('files')){
    		foreach ($files as $file) {
    			$rename = time() . uniqid() . '.' .$file->extension();
    			Storage::disk('product_image')->put($rename, file_get_contents($file));
    			array_push($file_names, $rename);
    		}
    	}
    	Products::create([
            'code' => trim($data->code),
			'type' => trim($data->type),
			'color' => trim($data->color),
			'fit' => trim($data->fit),
			'size' => trim($data->size),
			'price' => trim($data->price),
			'picture' => json_encode($file_names, JSON_FORCE_OBJECT),
			'user_type' => 1,
			'created_by' => Auth::guard('styler')->user()->id
        ]);
    	echo 'true';
    }

    public function updateProduct(Request $request, $product_id = 0)
    {
        $files = $request->file('files');
        $file_names = [];
        if($request->hasFile('files')){
            if(isset($request->img_remove)){
                $product = Products::where('id', $product_id)->first();
                $images = get_object_vars(json_decode($product->picture));
                foreach ($images as $key => $value) {
                    $file_path = public_path("uploads/product_image/{$value}");
                    if(File::exists($file_path)) File::delete($file_path);
                }
            }else{
                $product = Products::where('id', $product_id)->first();
                $file_names = get_object_vars(json_decode($product->picture));
            }
            foreach ($files as $file) {
                $rename = time() . uniqid() . '.' .$file->extension();
                Storage::disk('product_image')->put($rename, file_get_contents($file));
                array_push($file_names, $rename);
            }
        }
        Products::where('id', $product_id)
                ->update(
                    [
                        'type' => trim($request->type),
                        'color' => trim($request->color),
                        'fit' => trim($request->fit),
                        'size' => trim($request->size),
                        'price' => trim($request->price),
                        'picture' => json_encode($file_names, JSON_FORCE_OBJECT),
                    ]
                );
        echo 'true';
    }

    public function get_dose_no(Request $request){
        if(!empty($request->queryString)){
            $order_info = Orders::select('customer_name', 'order_id')
                                ->where('order_id', 'like', '%'.json_decode($request->queryString).'%')
                                ->where('process_status', 2)
                                ->where('assign_to', Auth::guard('styler')->user()->id)
                                ->orderBy('created_at', 'desc')
                                ->get();
            if(count($order_info) > 0) {
                echo '<ul>';
                    foreach ($order_info as $result) {
                        echo '<li onClick="fill(\''.addslashes($result->order_id).'\', \''.$request->counter.'\');">'.$result->order_id.' - ('.$result->customer_name.')</li>';
                    }
                echo '</ul>';
            }else{
                echo '<ul><li>No Dose Found</li></ul>';
            }
        }
    }

    public function check_order_no(Request $request){
        $order_info = Orders::where('order_id', json_decode($request->order_no))
                            ->where('process_status', 2)
                            ->where('assign_to', Auth::guard('styler')->user()->id)
                            ->get();
        if(count($order_info) > 0){
            echo '0';
        }else{
            echo '1';
        }
    }

    public function add_to_list(Request $request){
        Products::where('id', json_decode($request->product_id))
                ->update(
                    [
                        'status' => '1',
                        'order_id' => json_decode($request->order_no)
                    ]
                );
        echo '1';
    }

    public function get_product_by_type(Request $request)
    {
        $html = '';
        if($request->type != ''){
            $products = Products::where('type', $request->type)->orderBy('created_at', 'desc')->get();
            foreach($products as $product){
                $images = [];
                $has_frame = '';
                $images_objects = json_decode($product->picture);
                foreach($images_objects as $key => $value){
                    array_push($images, $value);
                }
                if(count($images) > 1){
                    $has_frame = 'has-frames';
                }
                $html .= '<div class="col-md-2 accepted-product-item">
                            <div class="single-product '.$has_frame.'">
                                <figure class="wpf-demo-6">
                                    <img class="img-responsive" src="'.url('uploads/product_image/'.$images[0]).'" alt="Product Image">
                                    <figcaption class="view-caption">
                                        <a class="add_to_list">add to set</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>';
            }
        }
        echo $html;
    }
}