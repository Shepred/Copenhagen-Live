<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use VatsimSSO;
use Session;
use Redirect;

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

    public function Login()
    {
        $returnUrl = url('login/validate');

        return VatsimSSO::login(
            $returnUrl,
            function($key, $secret, $url) {
                Session::put('vatsimauth', compact('key', 'secret'));
                return Redirect::to($url);
            },
            function($e) {
                throw $e; // Do something with the exception
            }
        );
    }

    public function validateLogin(Request $request)
    {
        $session = Session::get('vatsimauth');
        Session::forget('vatsimauth');       

        // If user 'returns to site', return to home - $request returns null values
        if (! $request->input('oauth_verifier'))

            flash('Your login has been cancelled.');
        
            return redirect()->route('home');

        $sso = VatsimSSO::checkLogin($session['key'], $session['secret'], $request->input('oauth_verifier'));
        Session::put('user', $sso->user);

        Session::put('vatsim_authed', true);

        return Redirect::to('/booking');
    }

    public function Logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::to('/');
    }
}
