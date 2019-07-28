<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function name()
    {
        $loginType = request()->input('name');
        $this->name = filter_var($loginType,FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        request()->merge([$this->name => $loginType]);

        return property_exists($this,'name') ? $this->name : 'email';
    }

    /*protected function credentials(Request $request){
        //return $request->{$this->username()} ?'email'=> $request->email ,'password'=>$request->password,'IsConfirmed'=>'1'];
        $credentials = $request->only($this->username(),'password');
        $credentials = array_add($credentials,'isConfirmed','1');
        return $credentials;

    }*/

}
