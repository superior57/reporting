<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdataPostFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Formedit as Database;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
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
    public function index(Request $request)
    {
        $mydb = new Database;
        $value = $request->all();
        // $pc_id = $value['pc_id'];
        $year = $value['year'];
        // var_dump($year);exit;
        $details = $this->get_details($mydb, $year);
        // var_dump($details);exit;
        $data = $this->get_service_result($mydb, $year);

        return view('chart', compact('data', 'details', 'year'));
    }

    function get_service_result($mydb, $year)
    {
        // var_dump($pc_id);exit;
        for ($i=1; $i < 13 ; $i++) { 
            $data = array();
            $data[] = $mydb->get_count("service_problem", "PERKAKASAN", $i, $year);
            $data[] = $mydb->get_count("service_problem", "PERISIAN/APLIKASI", $i, $year);
            $data[] = $mydb->get_count("service_problem", "RANGKAIAN", $i, $year);
            $data[] = $mydb->get_count("service_problem", "VIRUS", $i, $year);
            $data[] = $mydb->get_count("service_problem", "INTRANET/EMAIL", $i, $year);
            $data[] = $mydb->get_count("service_install", "PERISIAN/APLIKASI", $i, $year);
            $data[] = $mydb->get_count("service_install", "PERKAKASAN", $i, $year);
            $data[] = $mydb->get_count("service_other", "", $i, $year);
            $result[] = $data;
        }
        // var_dump($result);exit;
        
        return $result;
    }

    function get_details($mydb, $year)
    {
        return $mydb->get_details($year);
        // var_dump($data);exit;
    }

}
