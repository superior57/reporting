<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdataPostFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Formedit;
use Illuminate\Http\Request;
use DB;

class FormeditController extends Controller
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
        return view('formedit');
    }

    public function ajax_form(Request $request)
    {
        $value = $request->all();
        // var_dump($value);exit;
        $this->save($value);
        echo json_encode(array("status" => TRUE)); 
    }
    function save($data)
    {
        // var_dump($data);exit;
        $pc_no = $data['pc_no'];
        $pc_id = $data['pc_id'];
        $editer_name = $data['editer_name'];
        $editer_ext = $data['editer_ext'];
        $editer_department = $data['editer_department'];
        $editer_sla = $data['editer_sla'];
        $service_problem = $data['service_problem'];
        $service_install = $data['service_install'];
        $service_other = $data['service_other'];
        $service_company = $data['service_company'];
        $service_usersign = $data['service_usersign'];
        $service_usersign_date = $data['service_usersign_date'];
        $set_registered = $data['set_registered'];
        $set_repaired = $data['set_repaired'];
        $set_replaced = $data['set_replaced'];
        $set_sendreference = $data['set_sendreference'];
        $set_kiv = $data['set_kiv'];
        $set_kiv_date = $data['set_kiv_date'];
        $set_jamin = $data['set_jamin'];
        $set_note = $data['set_note'];
        $set_signatrue = $data['set_signatrue'];
        $set_signatrue_date = $data['set_signatrue_date'];
        $set_usersignatrue = $data['set_usersignatrue'];
        $set_usersignatrue_date = $data['set_usersignatrue_date'];
        $info_hardware = $data['info_hardware'];
        $info_softapp = $data['info_softapp'];
        $info_signatrue_officer = $data['info_signatrue_officer'];
        $info_signatrue_officer_date = $data['info_signatrue_officer_date'];
        $user_email = $data['user_email'];
        $modify_date = $data['modify_date'];
        $user_id = $data['user_id'];

        $query = "INSERT INTO tbl_form(pc_no, pc_id, editer_name, editer_ext, editer_department, editer_sla, service_problem, service_install, service_other, service_company, service_user_sign, service_user_sign_date, set_registered, set_repaired, set_replaced, set_sendreference, set_kiv, set_kiv_date, set_jamin, set_note, set_signatrue, set_signatrue_date, set_usersignatrue, set_usersignatrue_date, info_hardware, info_softapp, info_signatrue_officer, info_signatrue_officer_date, user_email, modify_date, user_id) VALUES('$pc_no', '$pc_id', '$editer_name', '$editer_ext', '$editer_department', '$editer_sla', '$service_problem', '$service_install', '$service_other', '$service_company', '$service_usersign', '$service_usersign_date', '$set_registered', '$set_repaired', '$set_replaced', '$set_sendreference', '$set_kiv', '$set_kiv_date', '$set_jamin', '$set_note', '$set_signatrue', '$set_signatrue_date', '$set_usersignatrue', '$set_usersignatrue_date', '$info_hardware', '$info_softapp', '$info_signatrue_officer', '$info_signatrue_officer_date', '$user_email', '$modify_date', '$user_id');";
        // var_dump($query);exit;
        DB::insert($query);        
    }
}
