<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Styler;
use App\Orders;
use Image;
use Auth;
use File;
use DB;

class StylerController extends Controller
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
    	$stylers = Styler::select('stylers.*', 'countries.name as country')
                        ->leftJoin('countries', 'stylers.country', '=', 'countries.code')
                        ->orderBy('stylers.created_at', 'desc')
                        ->get();
        $this->data['stylers'] = $stylers;
        $this->data['active'] = 'styler';
    	return view('admin/styler/styler_list')->with($this->data);
    }

    public function create_styler_view(Request $request)
    {
        $countries = DB::table('countries')->get();
        $this->data['countries'] = $countries;
        $this->data['active'] = 'styler';
    	return view('admin/styler/styler_create_form')->with($this->data);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'username' => 'required|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6|same:password', 
            'country' => 'required',
            'picture' => 'image'
        ]);
    }

    protected function create_styler(Request $request)
    {
    	$validator = $this->validator($request->all());
    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator->errors())->withInput();
    	}

    	$file = $request->file('picture');
    	$file_name = '';
    	if($request->hasFile('picture')){
            $rename = time() . uniqid() . '.' .$file->extension();
            $file->move('uploads/styler_picture', $rename);
        	$image = Image::make(sprintf('uploads/styler_picture/%s', $rename))->resize(100, 107)->save();
            $file_name = $rename;
        }
        $info = array(
        			'name' => $request->name,
		            'name' => $request->username,
		            'email' => $request->email,
		            'username' => $request->username,
                    'country' => $request->country,
		            'password' => bcrypt($request->password),
        		);
       	if(!empty($file_name)){
       		$info['picture'] = $file_name;
       	}

        Styler::create($info);
        $request->session()->flash('message', 'User successfully created');
        return redirect('admin/styler');
    }

    public function edit_styler($styler_id = null)
    {
    	$styler = Styler::find($styler_id);
        $this->data['styler'] = $styler;
        $this->data['active'] = 'styler';
        $countries = DB::table('countries')->get();
        $this->data['countries'] = $countries;
    	return view('admin/styler/styler_edit')->with($this->data);
    }

    public function update_styler(Request $request, $styler_id = null)
    {
    	$validator = Validator::make($request->all(), [
			            'name' => 'required|max:255',
			            'email' => 'required|email|max:255|unique:admins,email,'.$styler_id,
			            'username' => 'required|max:255|unique:admins,username,'.$styler_id,
                        'country' => 'required',
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
    		$styler = Styler::where('id', $styler_id)->first();
            $image = $styler->picture;
            $file_path = public_path("uploads/styler_picture/{$image}");
            if(File::exists($file_path)) File::delete($file_path);

            // uploading image
            $rename = time() . uniqid() . '.' .$file->extension();
            $file->move('uploads/styler_picture', $rename);
        	$image = Image::make(sprintf('uploads/styler_picture/%s', $rename))->resize(100, 107)->save();
            $file_name = $rename;
        }
        $info = array(
        			'name' => $request->name,
		            'name' => $request->username,
		            'email' => $request->email,
		            'username' => $request->username,
                    'country' => $request->country,
        		);
        if(!empty($request->password)){
        	$info['password'] = bcrypt($request->password);
        }
       	if(!empty($file_name)){
       		$info['picture'] = $file_name;
       	}

        Styler::where('id', $styler_id)
        		->update($info);
        $request->session()->flash('message', 'User successfully updated');
        return redirect('admin/styler');
    }

    public function delete_styler(Request $request, $styler_id = null)
    {
    	$styler = Styler::find($styler_id);
    	if($styler){
			$styler->delete();
			$request->session()->flash('message', 'User successfully deleted');
	        return redirect('admin/styler');
        }
        $request->session()->flash('error', 'No styler found');
        return redirect('admin/styler');
    }
}
