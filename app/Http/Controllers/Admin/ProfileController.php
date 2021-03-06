<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Admin;
use App\Orders;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Storage;
use Image;

class ProfileController extends Controller
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

    public function my_profile(){
        $user_info = Admin::where('id', Auth::guard('admin')->user()->id)
                            ->first();
        $this->data['user_info'] = $user_info;                    
        $this->data['active'] = 'dashboard';
        return view('admin/auth/profile_view')->with($this->data);
    }

    public function check_username(Request $request){
    	$user_info = Admin::where('username', trim($request->username))
    						->where('id', '!=', Auth::guard('admin')->user()->id)
                            ->get();
        if(count($user_info) > 0){
        	echo 'false';
        }else{
        	echo 'true';
        }
    }

    public function check_email(Request $request){
    	$user_info = Admin::where('email', trim($request->email))
    						->where('id', '!=', Auth::guard('admin')->user()->id)
                            ->get();
        if(count($user_info) > 0){
        	echo 'false';
        }else{
        	echo 'true';
        }
    }

    public function update_profile(Request $request){
    	$file = $request->file('picture');
    	$file_name = '';
    	if($request->hasFile('picture')){
            $rename = time() . uniqid() . '.' .$file->extension();
            $file->move('uploads/admin_picture', $rename);
        	$image = Image::make(sprintf('uploads/admin_picture/%s', $rename))->resize(100, 107)->save();
            // Storage::disk('admin_picture')->put($rename, file_get_contents($file));
            $file_name = $rename;
        }
        $info = array(
        			'name' => trim($request->name),
                    'username' => trim($request->username),
                    'email' => trim($request->email)
        		);
        if($file_name != ''){
       		$info['picture'] = $file_name;
       	}
       	if(trim($request->password) != ''){
       		$info['password'] = bcrypt(trim($request->password));
       	}
    	Admin::where('id', Auth::guard('admin')->user()->id)
                ->update($info);
        $request->session()->flash('message', 'Profile Update Successful');
        $request->session()->flash('msg_class', 'success');
        return redirect('admin/profile');
    }
}
