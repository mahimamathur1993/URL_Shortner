<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ResetPasswordController extends Controller
{
    // Display the password reset view for the given token.
    public function showResetForm(Request $request, $token = null)
    {
        return view('pages.auth.passwords.reset', ['token' => $token, 'email' => $request->email]);
    }

    // Reset the given user's password.
    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = bcrypt($password);
                $user->save();
            }
        );

        // Redirect with success or error message
        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', __($status));
        } else {
            throw ValidationException::withMessages(['email' => [__($status)]]);
        }
    }
}
