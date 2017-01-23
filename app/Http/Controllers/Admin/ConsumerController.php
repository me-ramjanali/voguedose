<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Orders;
use DB;
use App\User;

class ConsumerController extends Controller
{
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

    function index(){
    	$order_info = Orders::select(DB::raw('orders.*, max(orders.created_at) as created_at, max(orders.id) as id, users.name as user'))
                        ->join('users', 'orders.requested_by', '=', 'users.id')
                        ->groupBy('orders.requested_by')
                        ->get();
        $this->data['order_info'] = $order_info;
        $this->data['active'] = 'consumer';
    	return view('admin/consumer/consumer_list')->with($this->data);
    }
}
