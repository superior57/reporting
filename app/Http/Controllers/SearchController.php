<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdataPostFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Formedit as database;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class SearchController extends Controller
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
        $users = $this->get_users();
        return view('search', compact('users'));
    }

    function get_users()
    {
        $mydb = new database();
        return $mydb->get_data("users");
    }

    public function ajax_delete(Request $request)
    {
        // var_dump("123");exit;
        $data = $request->all(); 
        $mydb = new database();
        $id = $data['id'];
        $mydb->delete_user($id);
        echo json_encode(array("status" =>TRUE));
    }
    public function ajax_get_users()
    {
        $mydb = new database();
        $users = $mydb->get_data("users");
        echo json_encode($users);
    }
    public function ajax_save(Request $request)
    {
        // var_dump("came here ajax_save function");exit;
        $mydb = new database();
        $data = $request->all();
        $value[] = $data['_token'];
        $value[] = $data['txtEv'];
        $value[] = $data['txtSteam'];
        $value[] = $data['txtDis'];
        $value[] = $data['txtFive'];
        $value[] = $data['txtEmail'];
        $value[] = $data['txtPassword'];
        $value[] = $data['txtAge'];
        $value[] = $data['chbActive'];
        $value[] = $data['cmbAuthority'];

        $mydb->save_user($value);
        echo json_encode(array('status'=>TRUE));
    }
    public function ajax_update(Request $request)
    {
        $data = $request->all();
        $mydb = new database();
        $id = $data['id'];
        $value[] = $data['_token'];
        $value[] = $data['txtEv'];
        $value[] = $data['txtSteam'];
        $value[] = $data['txtDis'];
        $value[] = $data['txtFive'];
        $value[] = $data['txtEmail'];
        $value[] = $data['txtAge'];
        $value[] = $data['chbActive'];
        $value[] = $data['cmbAuthority'];
        $mydb->update_user($id, $value);
        echo json_encode(array('status'=>TRUE));
    }

    public function ajax_get_user(Request $request)
    {
        $value = $request->all();
        $id = $value['id'];
        $result = DB::select("SELECT * FROM users WHERE id='$id';");
        echo json_encode($result);
    }

}
