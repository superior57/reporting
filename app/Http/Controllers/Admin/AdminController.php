<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdataPostFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Formedit as database;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->authority != "Administrator")
        {
            var_dump("Sorry but, You can't access this page");exit;
            return;
        }
        else
         return view('admin_view/index');
    }

    public function userlist()
    {
        if (auth()->user()->authority != "Administrator")
        {
            var_dump("Sorry but, You can't access this page");exit;
            return;
        }
        else
            return view('admin_view/userlist');
    }

    public function newusers()
    {
        return view('admin_view/newuser');        
    }

    public function homepage()
    {
        return view('admin_view.homepage');
    }



}
