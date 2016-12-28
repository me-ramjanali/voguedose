<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Orders;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
        if(Auth::guard('admin')->check()){
            $newOrders = Orders::select('orders.*', 'customer_name as user')
                                ->where('process_status', 0)
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
        return view('admin/home/home', $this->data);
    }
}
