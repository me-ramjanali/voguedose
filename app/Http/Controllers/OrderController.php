<?php

namespace App\Http\Controllers;

use App\Orders;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;

class OrderController extends Controller
{
    public function index()
    {
        $data = array(
                    'meta' => 'Order'
                );
        return view('order')->with($data);
    }

    public function add_order(Request $request)
    {
    	$data = json_decode($_POST['info']);
    	$files = $request->file('files');
    	$file_names = [];
    	if($request->hasFile('files')){
    		foreach ($files as $file) {
    			$rename = time() . uniqid() . '.' .$file->extension();
    			Storage::disk('user_order_image')->put($rename, file_get_contents($file));
    			array_push($file_names, $rename);
    		}
    	}
    	$target_date = date("Y-m-d", strtotime("date('d/m/Y') +15 days"));
    	Orders::create([
            'customer_name' => trim($data->username),
			'customer_age' => trim($data->age),
			'customer_height' => trim($data->height),
			'customer_weight' => trim($data->weight),
			'customer_profession' => trim($data->for_living),
			'clothesInWardrobe' => trim($data->clothesInWardrobe),
			'currentStyleRate' => trim($data->currentStyleRate),
			'bodyType' => strtolower(trim($data->body_type)),
			'chest' => trim($data->chest),
			'waist' => trim($data->waist),
			'hips' => trim($data->hips),
			'top' => json_encode($data->top),
			'dress' => json_encode($data->dress),
			'bottom' => json_encode($data->bottom),
			'topFit' => trim($data->top_cloth),
			'bottomFit' => trim($data->bottom_cloth),
			'preferCloth' => trim($data->prefer_cloth),
			'styleForCloset' => json_encode($data->styleForCloset),
			'dressCoast' => json_encode($data->dressCoast),
			'topsCoast' => json_encode($data->topsCoast),
			'bottomCoast' => json_encode($data->bottomCoast),
			'bagsCoast' => json_encode($data->bagsCoast),
			'styleRatings' => json_encode($data->styleRatings),
			'preferStyle' => trim($data->preferStyle),
			'socialLinks' => json_encode($data->socials),
			'Picture' => json_encode($file_names, JSON_FORCE_OBJECT),
			'likedColor' => trim($data->likedColor),
			'dislikedColor' => trim($data->dislikedColor),
			'additionalBodyOption' => json_encode($data->additionalBodyOption),
			'additionalBodyComment' => trim($data->additionalBodyComment),
			'itemsToReject' => json_encode($data->itemsToReject),
			'itemsToRejectComment' => trim($data->itemsToRejectComment),
			'phone' => trim($data->phonenumber),
			'address' => trim($data->address),
			'comments' => trim($data->comments),
			'target_date' => $target_date,
			'process_status' => 0,
			'order_id' => 'ord'.mt_rand(100000,999999),
			'requested_by' =>  Auth::user()->id
        ]);

        echo true;
    }

    public function success()
    {
        $data = array(
                    'meta' => 'Order'
                );
        return view('order_success')->with($data);
    }
}
