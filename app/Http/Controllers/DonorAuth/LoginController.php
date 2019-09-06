<?php

namespace App\Http\Controllers\DonorAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Donor;

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

    protected $redirectTo = '/donor/home';

   /* protected function authenticated() {
        if (auth()->guard('donor')->check()){ 
            return redirect()->view('/donor/home')->with('donor', Auth::guard('donor')->user());
        }
    }*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/
    
    protected function guard(){
        return auth()->guard('donor');
    }

    public function showLoginForm()
    {
        return view('donor-auth.login');
    }
}
