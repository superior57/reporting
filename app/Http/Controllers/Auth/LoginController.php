<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\StoreUpdataPostFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Formedit;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    use AuthenticatesUsers;

    protected function login(Request $request)
    {
        // $query = "SELECT approve_status FROM "
        $approve_status = DB::table('users')->where( 'email', $request->email)->value('approve_status');
        $authority = DB::table('users')->where('email', $request->email)->value('authority');
        $password_pase = DB::table('users')->where('email', $request->email)->value('password');
        if ( $approve_status ) {
            $user = ['email' => $request->email, 'password' => $password_pase, 'authority' => $authority,  'active' => 1];

            if (Auth::attempt(['email' =>$request->email, 'password' => $request->password])) {
                return redirect('/home');
                // The user is active, not suspended, and exists.
            }    
        }
        else 
            return view('notapproved');
    }

    protected function authenticated(Request $request, $user)
    {
         return redirect('/home');
    }


}
