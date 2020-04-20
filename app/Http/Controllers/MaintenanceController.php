<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdataPostFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Formedit;
use Illuminate\Http\Request;
use DB;

class MaintenanceController extends Controller
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
        return view('maintenance');
    }

    public function ajax_form(Request $request)
    {
        $value = $request->all();
        

        $this->save($value);
        // var_dump($value);exit;  
        echo json_encode(array("status" => TRUE)); 
    }
    function save($data)
    {
        // var_dump($data);exit;

        DB::insert();        
    }
}
