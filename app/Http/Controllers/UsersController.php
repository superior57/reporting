<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdataPostFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Formedit as database;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\MailController as Mail;

class UsersController extends Controller
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
    public function index($id)
    {
        $user = DB::select("SELECT * FROM users WHERE id = '$id';");
        // $record = DB::select("SELECT * FROM record WHERE user_id = '$id';");
        return view('usersDiag', compact('user'));
    }
    
    public function quickSearch(Request $request)
    {
        $data = $request->all(); 
        // $mydb = new database();
        $id = $data['id'];
        // var_dump($id);exit;
        return redirect('/users');
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

        $query ="SELECT * FROM users WHERE id='$id';";
        $user = DB::select($query);

        $email_to = $user[0]->email;
        $email_from = "accounts@rpreportingagency.com";      
        $subject = " Account was Disapproved !";  
        $message = "";
        $message .= '<html><body style="background:#F5F5F5;margin:20;"><hr><h1>Hello User,</h1><br><br><hr><h3>After review by our team at RPRA, we decided to not approve your account. Any Questions please email us at <a href="accounts@rpreportingagency.com">accounts@rpreportingagency.com</a><br><br>Best Regards,<br>Accounts Department<br><a href="www.rpreportingagency.com">www.rpreportingagency.com</a></h3>';
        $mail = new Mail();
        $mail->send_email($email_to, $email_from, $subject, $message);

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

    public function ajax_user_seted(Request $request)
    {
        $mydb = new database();
        $data = $request->all();
        $id = $data['id'];

        $value[] = $data['edit_name'];
        $value[] = $data['edit_regid'];
        $value[] = $data['edit_birth'];
        $value[] = $data['edit_email'];
        $value[] = $data['edit_steam'];
        $value[] = $data['edit_five'];
        $value[] = $data['cmbActivity'];
        $value[] = $data['cmbFlag'];
        $value[] = $data['cmbVerify'];
        $value[] = $data['cmbAuth'];

        $mydb->user_seted($id, $value);

        echo json_encode(array('status'=>TRUE));        
    }

    public function ajax_user_approve(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        $query = "UPDATE users SET approve_status='1', is_new='0' WHERE id = '$id';";
        DB::update($query);
        $query ="SELECT * FROM users WHERE id='$id';";
        $user = DB::select($query);

        $email_to = $user[0]->email;
        $email_from = "accounts@rpreportingagency.com";  
        $subject = " Registration Confirmation/ Account Approval"; 
        $message = "";

        if ($user[0]->authority == "ServerAdmin") {
            $message .= '<html><body style="background:#F5F5F5;margin:20;"><hr><h1>Welcome ! Your account has been approved !</h1><br><br><hr><h3>You have now been given access as a Server admin to the RP Reporting system.Please see your account info below. Please also make sure to keep a record of your Server ID #as this is tagged to your account. Once a server is registered with that ID # it CANNOT bechanged.</h3><table width="100%">';
            $message .= '<tr><td>Server ID # :</td><td><b>'.$user[0]->server_id.'</b></td></tr>';
            $message .= '<tr><td>Server Name :</td><td>'.$user[0]->server_name.'</td></tr>';
            $message .= '<tr><td>User Name :</td><td>'.$user[0]->name.'</td></tr>';
            $message .= '<tr><td>Password # :</td><td>'.$user[0]->password_code.'</td></tr>';
        }
        elseif ($user[0]->authority == "RegularUser") 
        {
            $message .= '<html><body style="background:#F5F5F5;margin:20;"><hr><h1>Welcome ! Your account has been approved !</h1><br><br><hr><h3>You have now been E-Verified through the online RP Reporting system. Below is yourRegistration # and Username and Password.</h3><table width="100%">';
            $message .= '<tr><td>Registration # :</td><td><b>'.$user[0]->reg_id.'</b></td></tr>';
            $message .= '<tr><td>Username :</td><td>'.$user[0]->name.'</td></tr>';
            $message .= '<tr><td>Password # :</td><td>'.$user[0]->password_code.'</td></tr>';
        }   

        $message .= "<tr><td colspan='2'><br>Please log in @ <a href='https://rpreportingagency.com'>www.rpreportingagency.com</a><br></td></tr>";  
        $message .= "<tr><td></td><td>Best Regards!<br>Accounts Department<br><a href='www.rpreportingagency.com'>www.rpreportingagency.com</a></td></tr>";  

        $mail = new Mail();
        $mail->send_email($email_to, $email_from, $subject, $message);

        echo json_encode(array('status'=>TRUE));   

    }

    public function ajax_record_appeal(Request $request)
    {
        $record_id = $request->record_id;
        $appeal = $request->app_whyappealed;
        $user_id = $request->record_userid;
        $query = "UPDATE record SET appeal='$appeal' WHERE id='$record_id';";
        DB::update($query);

        $query ="SELECT * FROM users WHERE id='$user_id';";
        $user = DB::select($query);

        $email_to = "appeals@rpreportingagency.com";
        $email_from = $user[0]->email;      
        $subject = " Appeal Record Form";  
        $message = "";
        $message .= '<html><body style="background:#F5F5F5;margin:20;"><br><table width="100%"><br>';
        $message .= '<tr><td>Offense ID :</td><td>'.$request->app_offenseId.'</td></tr>';
        $message .= '<tr><td>Server ID :</td><td>'.$request->app_serverId.'</td></tr>';
        $message .= '<tr><td>Server Name :</td><td>'.$request->app_serverName.'</td></tr>';
        $message .= '<tr><td>Offense :</td><td>'.$request->app_offense.'</td></tr>';
        $message .= '<tr><td>Punishment :</td><td>'.$request->app_punishment.'</td></tr>';
        $message .= '<tr><td>Why It Should Be Appealed :</td><td>'.$request->app_whyappealed.'</td></tr>';
        $message .= '<tr><td>Appealed By :</td><td>'.$request->app_regId.'</td></tr>';

        $message .= "<tr><td colspan='2'><br>Please log in to make a decision on the request @ <a href='https://rpreportingagency.com'>www.rpreportingagency.com</a><br></td></tr>"; 

        // $mail = new Mail();
        // $mail->send_email($email_to, $email_from, $subject, $message);

        echo json_encode(array('status'=>TRUE));
    }

}
