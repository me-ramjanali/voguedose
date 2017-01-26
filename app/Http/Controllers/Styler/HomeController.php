<?php

namespace App\Http\Controllers\Styler;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Orders;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['active'] = 'dashboard';
        return view('styler/home/home')->with($this->data);
    }
}
