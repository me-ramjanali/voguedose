<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Orders;
use App\Products;
use Auth;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $newOrders = Orders::select('orders.*', 'customer_name as user')
                            ->where('process_status', 0)
                            ->orderBy('created_at', 'desc')
                            ->get();
        $this->data = array(
                    'newRequests' => $newOrders
                );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/home/home')->with($this->data);
    }

    public function order_details($order_id = null){
        $order_info = Orders::select('orders.*', 'customer_name as user')
                            ->where('orders.id', $order_id)
                            ->first();
        $this->data['order_info'] = $order_info;
        $this->data['active'] = 'dashboard';
        return view('admin/order/order_detail')->with($this->data);
    }

    public function order_accept(Request $request, $order_id = null){
        $request->session()->flash('message', 'Order Accepted!');
        $request->session()->flash('msg_class', 'success');
        $order_info = Orders::where('id', $order_id)
                            ->update(['process_status' => 2, 'accept_on' => date('Y-m-d H:i:s')]);
        return redirect('admin/dashboard');
    }

    public function order_decline(Request $request, $order_id = null){
        $request->session()->flash('message', 'Order Declined!');
        $request->session()->flash('msg_class', 'danger');
        $order_info = Orders::where('id', $order_id)
                            ->update(['process_status' => 3, 'reject_on' => date('Y-m-d H:i:s')]);
        return redirect('admin/dashboard');
    }

    public function on_process()
    {
        $order_info = Orders::select('orders.*', 'customer_name as user')
                            ->where('process_status', 2)
                            ->orderBy('created_at', 'desc')
                            ->get();
        $this->data['order_info'] = $order_info;
        $this->data['active'] = 'in_progress';
        return view('admin/in_progress/work_in_progress')->with($this->data);
    }

    public function completed_orders(){
        $order_info = Orders::select('orders.*', 'customer_name as user')
                            ->where('process_status', 4)
                            ->orderBy('created_at', 'desc')
                            ->get();
        $this->data['order_info'] = $order_info;
        $this->data['active'] = 'completed';
        return view('admin/order/completed_order_list')->with($this->data);
    }
}
