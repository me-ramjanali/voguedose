<?php

namespace App\Http\Controllers\Styler;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ClothSets;
use App\Orders;
use App\Products;
use Auth;

class ClothSetController extends Controller
{
	public function __construct()
    {
        if(Auth::guard('styler')->check()){
            $newOrders = Orders::select('orders.*', 'customer_name as user')
                                ->where('process_status', 1)
                                ->where('assign_to', Auth::guard('styler')->user()->id)
                                ->orderBy('created_at', 'desc')
                                ->get();
            $this->data = array(
                        'newRequests' => $newOrders
                    );
        }
    }

    public function index(Products $product)
    {
    	$this->data['active'] = 'cloth_set';
    	$this->data['types'] = $product->getAllTypes();
    	$this->data['clothsets'] = ClothSets::orderBy('id', 'desc')->get();
    	return view('styler/cloth_set/cloth_set')->with($this->data);
    }

    public function create_set(Request $request)
    {
        $data = array(
                    'name' => $request->name,
                    'product_codes' => $request->product_codes,
                );
        ClothSets::create($data);
        echo 'true';
    }

    public function update_set(Request $request)
    {
        $data = array(
                    'name' => $request->name,
                    'product_codes' => $request->product_codes,
                );
        ClothSets::where('id', $request->set_id)->update($data);
        echo 'true';
    }
}
