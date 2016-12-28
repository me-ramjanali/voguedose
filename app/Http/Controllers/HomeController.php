<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
                    'MOBILEREX' => "/^[689]\d{7}$/", 
                    'EMAILREX' => "/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i",
                    'AGEMINLIMIT' => 14,
                    'AGEMAXLIMIT' => 90,
                    'PASSWORDLEN' => 6,
                    'meta' => 'Home'
                );
        return view('home')->with($data);
    }
}
