<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Closure;
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
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    

    //Redirect After Login
     protected function redirectTo(){
        if(auth()->user()->checkUserRoleTypeGeneral()){
            return route('frontend_dashboard');
        } else if (auth()->user()->role->id == '3'){
             return route('home');
             return $next($request);
             redirect()->back();
            if(!session()->has('url.intended')){
                session(['url.intended' => url()->previous()]);
                return redirect()->to(session()->get('url.intended'));
            }

        } else {
            return '/';
        } 
    }
    
    public function showLoginForm()
    {
        if(!session()->has('url.intended'))
        {
            session(['url.intended' => url()->previous()]);
        }
        return view('auth.login');
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    
}
