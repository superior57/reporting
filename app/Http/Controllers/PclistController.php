<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdataPostFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Formedit;
use Illuminate\Http\Request;
use DB;

class PclistController extends Controller
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
        $pc_list = $this->get_pc();
        $years = $this->get_years();
        return view('pclist', compact('pc_list', 'years'));
    }

    public function ajax_form(Request $request)
    {
        $value = $request->all();        

        $this->save($value);
        echo json_encode(array("status" => TRUE));
    }
    function get_pc()
    {
        $data = DB::select('SELECT pc_id FROM tbl_form ORDER BY id DESC;'); 
        $result = array();
        foreach ( $data as $key => $value ){
            if(!in_array($value, $result))
                $result[] = $value;
        }
        return $result;
    }
    function get_years()
    {
        $data = DB::select('SELECT YEAR(modify_date) FROM tbl_form ORDER BY id DESC;'); 
        $result = array();
        foreach ( $data as $key => $value ){
            if(!in_array($value, $result))
                $result[] = $value;
        }
        return $result;        
    }
    public function ajax_get_pclist(Request $request)
    {
        $temp = $request->all();
        $year = $temp['year'];
        $data = DB::select("SELECT pc_id FROM tbl_form WHERE YEAR(modify_date) = '$year' ORDER BY id DESC;"); 
        $result = array();
        foreach ( $data as $key => $value ){
            if(!in_array($value, $result))
                $result[] = $value;
        }
        return $result;
    }

}
