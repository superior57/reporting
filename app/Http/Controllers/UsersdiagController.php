<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdataPostFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Formedit as database;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Controllers\MailController as Mail;

class UsersdiagController extends Controller
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
        return view('usersDiag', compact('users'));
    }

    function get_users()
    {
        $mydb = new database();
        return $mydb->get_data("users");
    }

    public function search(Request $request)
    {
        $value = $request->all();
        // var_dump("123123");
        $reg_id = $value['reg_id'];
        $email = $value['email'];

        $result = DB::select("SELECT *FROM users WHERE reg_id='$reg_id' || email='$email';");
        echo json_encode($result);
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

    // my account ...

    public function account()
    {        
        $user = auth()->user();
        return view('myacc', compact('user'));
    }

    // user list ...
    public function userlist()
    {        
        return view('userlist');
    }

    public function ajax_get_userlist()
    {
        $mydb = new database();
        $users = $mydb->get_user("users");
        echo json_encode($users);        
    }
    public function ajax_get_newuser()
    {
        $mydb = new database();
        $users = $mydb->get_newuser("users");
        echo json_encode($users);        
    }

    public function ajax_get_post()
    {
        $data = DB::select("SELECT text FROM homepost WHERE id='1';");
        echo json_encode($data);        
    }

    public function ajax_save_post(Request $request)
    {
        $query = "UPDATE homepost SET text = '$request->value' WHERE id = '1';";
        $data = DB::select($query);
        echo json_encode(array('status'=>TRUE));        
    }
    // record

    public function ajax_record_save(Request $request)
    {
        $mydb = new database();
        $data = $request->all();

        $value[] = $data['txtDate'];
        $value[] = $data['txtServerId'];
        $value[] = $data['txtSname'];
        $value[] = $data['cmbOffense'];
        $value[] = $data['txtNarrative'];
        $value[] = $data['cmbPunis'];
        $value[] = $data['txtOffenseId'];
        $value[] = $data['id'];

        $mydb->save_record($value);

        $query ="SELECT * FROM users WHERE id=".$data['id'];
        $user = DB::select($query);

        $email_to = "offenses@rpreportingagency.com";
        $email_from = $user[0]->email;      
        $subject = " Offense Record Added";  
        $message = "";
        $message .= '<html><body style="background:#F5F5F5;margin:20; text-align:center;"><hr><h1>Admin, </h1><br><br><hr><h3>The offense below was added to the system.</h3><table width="100%">';
            $message .= '<thead><th>Offense Date</th><th>Offense ID</th><th>Server ID</th><th>Server Name</th><th>Offense</th><th>Punishment</th></thead>';
            $message .= '<tr><td>'.$data['txtDate'].'</td><td>'.$data['txtOffenseId'].'</td><td>'.$data['txtServerId'].'</td><td>'.$data['txtSname'].'</td><td>'.$data['cmbOffense'].'</td><td>'.$data['cmbPunis'].'</td></tr>';

        $message .= "<tr><td colspan='6'><br>Please log in @ <a href='https://rpreportingagency.com'>www.rpreportingagency.com</a><br></td></tr>";  
        $message .= "<tr><td colspan='6'>Best Regards!<br>Offense/Violation Department<br><a href='www.rpreportingagency.com'>www.rpreportingagency.com</a></td></tr>";  

        $mail = new Mail();
        $mail->send_email($email_to, $email_from, $subject, $message);

        echo json_encode(array('status'=>TRUE));    
    }

    public function ajax_get_record(Request $request)
    {
        $mydb = new database();
        $data = $request->all();
        $user_id = $data['user_id'];
        $record = $mydb->get_record($user_id);
        echo json_encode($record);        
    }

    public function ajax_get_record_edit(Request $request)
    {
        $value = $request->all();
        $id = $value['id'];
        $result = DB::select("SELECT * FROM record WHERE id='$id';");
        echo json_encode($result);
    }

    public function ajax_record_seted(Request $request)
    {
        $mydb = new database();
        $data = $request->all();
        $id = $data['record_id'];
        $value[] = $data['cmbActivity'];
        $value[] = $data['cmbFlag'];
        $value[] = $data['cmbVerify'];

        $mydb->seted_record($id, $value);

        echo json_encode(array('status'=>TRUE));
    }

    public function search_user_record()
    {
        $user = auth()->user();
        return view('search', compact('user'));
    }

    public function ajax_search(Request $request)
    {
        $mydb = new database();
        $data = $request->all();
        // $id = $data['record_id'];

        $value[] = $data['search_regid'];
        $value[] = $data['search_discordid'];
        $value[] = $data['search_offenseid'];
        $value[] = $data['search_email'];

        $result = $mydb->get_search($value);
        // var_dump($result);exit;
        echo json_encode($result);          
    }

    public function ajas_delete_record(Request $request)
    {
        $data = $request->all(); 
        $id = $data['id'];
        $query = "DELETE FROM record WHERE id = '$id';";
        DB::delete($query);        
        echo json_encode(array("status" =>TRUE));
    }

    public function quick_record(Request $request)
    {
        $value = $request->all();
        $id = $value['id'];
        $result = DB::select("SELECT * FROM record LEFT JOIN users ON record.user_id = users.id WHERE record.id = '$id';");
        echo json_encode($result);        
    }

    // control panel
    public function control()
    {
        $user = auth()->user();
        return view('controlpanel', compact('user'));
    }

    public function ajax_homepost(Request $request)
    {
        // var_dump("123");exit;
        $data = DB::select("SELECT text FROM homepost WHERE id='1';");
        echo json_encode($data);
    }

    public function fileupload(Request $request)
    {
        $id = $request->id;
        $filename = "";
        if ( $id == "form_getserver" )
            $filename = "GettingStarted-ServerAdmins";
        else if ( $id == "form_getuser" )
            $filename = "GettingStarted-RegularUsers";
        else if ( $id == "form_ruleserver" )
            $filename = "Server-Rules";
        else if ( $id == "form_ruleuser" )
            $filename = "Regularuser-Rules";

        $success = \File::copy($request->file, base_path('public/files/'.$filename.'.pdf'));
        echo json_encode(array("status" => TRUE));
    }

    public function contactus(Request $request)
    {
        // var_dump("123");exit;
        $data = $request->all();
        $email_to = "info@rpreportingagency.com";
        $email_from = $data['email'];      
        $subject = $data['subject'];  
        $message_send = $data['message'];
        $message = "";

        $message .= '<html><body style="background:#F5F5F5;margin:20; text-align:center;"><hr><h1></h1><br><br><hr><h3>The offense below was added to the system.</h3><table width="100%">';
        $message .= '<tr><td>User Name : </td><td>'.$data['name'].'</td></tr>';
        $message .= '<tr><td>Email : </td><td>'.$email_from.'</td></tr>';
        $message .= '<tr><td>Subject : </td><td>'.$subject.'</td></tr>';
        $message .= '<tr><td>Message : </td><td>'.$message_send.'</td></tr>';

        $mail = new Mail();
        $mail->send_email($email_to, $email_from, $subject, $message);
        return true;
    }

    public function download_mp3($src)
    {
        Auth::logout();
        // $success = \File::copy('https://media.blubrry.com/culips/culips.com/esl/audio/rt31pod.mp3', base_path('public/files/3.mp3'));    
        return true;            
    }
}
