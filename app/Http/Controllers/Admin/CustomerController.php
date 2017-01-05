<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use App\Orders;
use Image;
use Auth;
use File;

class CustomerController extends Controller
{
	public function __construct()
    {
        $newOrders = Orders::select('orders.*', 'customer_name as customer')
                            ->where('process_status', 0)
                            ->orderBy('created_at', 'desc')
                            ->get();
        $this->data = array(
                    'newRequests' => $newOrders
                );
    }

    public function index()
    {
    	$customers = User::orderBy('created_at', 'desc')
                        ->get();
        $this->data['customers'] = $customers;
        $this->data['active'] = 'customer';
    	return view('admin/customer/customer_list')->with($this->data);
    }

    public function block_customer(Request $request, $customer_id = null)
    {
        $user = User::find($customer_id);
        if($user->active == 1 || empty($user->active)){
            User::where('id', $customer_id)
                ->update([
                    'active' => 0
                ]);
            $request->session()->flash('message', 'Customer successfully Blocked');
            return redirect('admin/customer');
        }
        $request->session()->flash('message', 'Customer already Blocked');
        return redirect('admin/customer');
    }

    public function unblock_customer(Request $request, $customer_id = null)
    {
        $user = User::find($customer_id);
        if($user->active == 0 || empty($user->active)){
            User::where('id', $customer_id)
                ->update([
                    'active' => 1
                ]);
            $request->session()->flash('message', 'Customer successfully Unblocked');
            return redirect('admin/customer');
        }
        $request->session()->flash('error', 'Customer already Unblocked');
        return redirect('admin/customer');
    }
}
