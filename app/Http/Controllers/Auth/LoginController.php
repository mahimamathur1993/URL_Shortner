<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{

    public function index()
    {
        return view('pages.auth.login');
    }
    public function llogin()
    {
        return redirect()->route('login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required|string',
        ]);

        $login = $request->input('login');
        $password = $request->input('password');

        $user = User::where('email', $login)->first();

        // Check if user exists and password is correct
        if ($user && Hash::check($password, $user->password)) {

            if ($user->status == 2) {
                return back()->withErrors(['login' => 'Sorry! You are suspended'])->withInput($request->only('login'));
            }
            // Log the user in
            Auth::login($user);
            // Redirect to the home page
            return redirect('/dashboard');
        }

        // If login fails, redirect back with an error message
        return back()->withErrors(['login' => 'Invalid credentials'])->withInput($request->only('login'));
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
