<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\MailController as Mail;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function showRegistrationForm(){
        $countries = Country::all();
        $server_id = rand(1000, 10000);
        $server_id = "A" . $server_id;
        $reg_id = rand(10000000, 100000000);
        $reg_id = "V" . $reg_id;
        $regist_id['server_id'] = $server_id;
        $regist_id['reg_id'] = $reg_id;
        return view('auth.register',['countries'=>$countries, 'regist_id'=>$regist_id]);

    }

    protected function validator(array $data)
    {
        // exit('ok');
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'authority' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'reg_id' => $data[''],
        //     'name' => $data['name'],
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'name' => $data['txtDis_id'],
        //     'name' => $data['txtFive_id'],
        //     'name' => $data['txtBirth'],
        //     'name' => $data['txtServer'],
        //     'authority' => $data['acctype'],
        // ]);
    }

    protected function register(Request $request)
    {
        $data = $request->all();
        $user = new User();
        $query = "SELECT MAX(id) as max_id FROM users";
        $result = DB::select($query);
        $max_id = $result[0]->max_id;  
        $new_id = intval($max_id) + 1;  
        // $registration_id = $data['user_name'] . "#" . str_repeat("0", ( 8 - intval( strlen((string)$new_id) ) ) ) . $new_id;
        // $string = str_replace(".", "", sprintf("%.7f", (double)$max_id * 0.0000001 ) );


        var_dump($data['avatar_data']);exit;


        $email_to = "accounts@rpreportingagency.com";
        $email_from = $data['email'];      
        $subject = "New User Registration";  
        $message = "";
        

        if ($data['accountType'] == "ServerAdmin")
        {
            $birth = "2019/5/7";

            $message .= '<html><body style="background:#F5F5F5;margin:20;"><hr><h1>New ServerAdmin Registration</h1><table width="100%">';
            $message .= '<tr><td>Name :</td><td>'.$data['user_name'].'</td></tr>';
            $message .= '<tr><td>Email :</td><td>'.$data['email'].'</td></tr>';
            $message .= '<tr><td>Country :</td><td>'.$data['countryfrom'].'</td></tr>';
            $message .= '<tr><td>ServerId :</td><td>'.$data['server_id'].'</td></tr>';
            $message .= '<tr><td>ServerName :</td><td>'.$data['server_name'].'</td></tr>';
            $message .= '<tr><td>Admin First Name :</td><td>'.$data['server_fname'].'</td></tr>';
            $message .= '<tr><td>Admin Last Name :</td><td>'.$data['server_lname'].'</td></tr>';
            $message .= '<tr><td># Of User In Server :</td><td>'.$data['server_userid'].'</td></tr>';
            $message .= '<tr><td># Of Admins :</td><td>'.$data['server_adminid'].'</td></tr>';
            $message .= '<tr><td>Discord Link :</td><td>'.$data['server_discordlink'].'</td></tr>';
            $message .= '<tr><td>Website Link :</td><td>'.$data['server_sitelink'].'</td></tr>';
        }
        else
        {
           $birth = $data['user_birth'];

           $message .= '<html><body style="background:#F5F5F5;margin:20;"><hr><h1>New RegularUser Registration</h1><table width="100%">';
            $message .= '<tr><td>Name :</td><td>'.$data['user_name'].'</td></tr>';
            $message .= '<tr><td>Email :</td><td>'.$data['email'].'</td></tr>';
            $message .= '<tr><td>Country :</td><td>'.$data['countryfrom'].'</td></tr>';
            $message .= '<tr><td>Registration ID :</td><td>'.$data['registration_id'].'</td></tr>';
            $message .= '<tr><td>Discord ID :</td><td>'.$data['user_discordid'].'</td></tr>';
            $message .= '<tr><td>Steam Hex Key :</td><td>'.$data['user_steamid'].'</td></tr>';
            $message .= '<tr><td>Five M User ID :</td><td>'.$data['user_fiveid'].'</td></tr>';
            $message .= '<tr><td>D.O.B :</td><td>'.$data['user_birth'].'</td></tr>';
            $message .= '<tr><td>Current Server :</td><td>'.$data['user_curserver'].'</td></tr>';
        }
        $user->create_newuser([
            'name' => $data['user_name'],
            'avatar' => $data['avatar_data'],
            'reg_id' => $data['registration_id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country_code' => $data['countryfrom'],
            'remember_token' => $data['_token'],


            'dis' => $data['user_discordid'],
            'steam' => $data['user_steamid'],
            'five' => $data['user_fiveid'],
            'age' => $birth,
            'cur_serverid' => $data['user_curserver'],
            'authority' => $data['accountType'],      

            'server_id' => $data['server_id'],
            'server_name' => $data['server_name'],
            'admin_fname' => $data['server_fname'],
            'admin_lname' => $data['server_lname'],
            'server_userid' => $data['server_userid'],
            'adminid' => $data['server_adminid'],
            'dis_link' => $data['server_discordlink'],
            'website_link' => $data['server_sitelink'],  
            'password_code' => $data['password'],

            'active' => '0',
            'flag' => '0',
            'verify' => '0',
            'approve_status' => '0',
            'is_new' => '1'
        ]);


        
        $message .= "<tr><td colspan='2'>Please log in @ <a href='https://rpreportingagency.com'>www.rpreportingagency.com</a> to Approve/Disapprove the users account</td></tr>";  

        $mail = new Mail();
        $mail->send_email($email_to, $email_from, $subject, $message);

        return view('thank');               
    }

}
