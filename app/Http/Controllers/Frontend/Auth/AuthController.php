<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }

        return $next($request);
    }
    public function login()
    {
        // dd(Hash::make('admin@access./?01'));
        return view('auth.login');
        
    }

    public function AuthLogin(Request $request)
    {
 
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
        {
                return redirect('dashboard');
        }
            
        else
        {
            return redirect()->back()->with('error', 'Incorrect Email or Password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}
