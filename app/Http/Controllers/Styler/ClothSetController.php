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
    	$this->data['ClothSets'] = ClothSets::orderBy('id', 'desc')->get();
    	return view('styler/cloth_set/cloth_set')->with($this->data);
    }

    public function create_set(Request $request)
    {
        print_r($request->all());
    }
}
