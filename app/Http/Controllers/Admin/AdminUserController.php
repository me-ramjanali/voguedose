<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Admin;
use App\Orders;
use Image;
use Auth;
use File;

class AdminUserController extends Controller
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

    public function index()
    {
    	$users = Admin::where('id', '!=', Auth::guard('admin')->user()->id)
    					->orderBy('created_at', 'desc')
                        ->get();
        $this->data['users'] = $users;
        $this->data['active'] = 'user';
    	return view('admin/admin_user/user_list')->with($this->data);
    }

    public function create_user_view(Request $request)
    {
        $this->data['active'] = 'user';
    	return view('admin/admin_user/user_create_form')->with($this->data);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'username' => 'required|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6|same:password', 
            'picture' => 'image'
        ]);
    }

    protected function create_user(Request $request)
    {
    	$validator = $this->validator($request->all());
    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator->errors())->withInput();
    	}

    	$file = $request->file('picture');
    	$file_name = '';
    	if($request->hasFile('picture')){
            $rename = time() . uniqid() . '.' .$file->extension();
            $file->move('uploads/admin_picture', $rename);
        	$image = Image::make(sprintf('uploads/admin_picture/%s', $rename))->resize(100, 107)->save();
            $file_name = $rename;
        }
        $info = array(
        			'name' => $request->name,
		            'name' => $request->username,
		            'email' => $request->email,
		            'username' => $request->username,
		            'password' => bcrypt($request->password),
        		);
       	if(!empty($file_name)){
       		$info['picture'] = $file_name;
       	}

        Admin::create($info);
        $request->session()->flash('message', 'User successfully created');
        return redirect('admin/user');
    }

    public function edit_user($user_id = null)
    {
    	$user = Admin::find($user_id);
        $this->data['user'] = $user;
        $this->data['active'] = 'user';
    	return view('admin/admin_user/user_edit')->with($this->data);
    }

    public function update_user(Request $request, $user_id = null)
    {
    	$validator = Validator::make($request->all(), [
			            'name' => 'required|max:255',
			            'email' => 'required|email|max:255|unique:admins,email,'.$user_id,
			            'username' => 'required|max:255|unique:admins,username,'.$user_id,
			            'password' => 'min:6|confirmed',
			            'password_confirmation' => 'min:6|same:password', 
			            'picture' => 'image'
			        ]);
    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator->errors())->withInput();
    	}

    	$file = $request->file('picture');
    	$file_name = '';
    	if($request->hasFile('picture')){
    		// remove previous image
    		$user = Admin::where('id', $user_id)->first();
            $image = $user->picture;
            $file_path = public_path("uploads/admin_picture/{$image}");
            if(File::exists($file_path)) File::delete($file_path);

            // uploading image
            $rename = time() . uniqid() . '.' .$file->extension();
            $file->move('uploads/admin_picture', $rename);
        	$image = Image::make(sprintf('uploads/admin_picture/%s', $rename))->resize(100, 107)->save();
            $file_name = $rename;
        }
        $info = array(
        			'name' => $request->name,
		            'name' => $request->username,
		            'email' => $request->email,
		            'username' => $request->username,
        		);
        if(!empty($request->password)){
        	$info['password'] = bcrypt($request->password);
        }
       	if(!empty($file_name)){
       		$info['picture'] = $file_name;
       	}

        Admin::where('id', $user_id)
        		->update($info);
        $request->session()->flash('message', 'User successfully updated');
        return redirect('admin/user');
    }

    public function delete_user(Request $request, $user_id = null)
    {
    	$user = Admin::find($user_id);
    	if($user){
			$user->delete();
			$request->session()->flash('message', 'User successfully deleted');
	        return redirect('admin/user');
        }
        $request->session()->flash('error', 'No user found');
        return redirect('admin/user');
    }
}
