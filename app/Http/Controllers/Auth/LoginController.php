<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/admin/dashboard';
    protected $username = "username";
    protected $guard = 'web';

    public function getLogin(){
        return view('login');
    }
    
    public function postLogin(Request $request){
        $auth = Auth::guard($this->guard)->attempt([
            'email' =>$request->only('email'),
            'password' => $request->only('password')
        ]);
        dd($auth);
        if($auth){
            return redirect()->route($this->redirectTo);
        }
        return redirect()->route('/');
    }
    
    public function getLogout(){
        Auth::guard($this->guard)->logout();
        return redirect()->route('/');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('guest')->except('logout');
    }
}
