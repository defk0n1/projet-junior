<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{   public function showRegistrationForm()
    {
        return view('register');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required',
        ]);

        if (auth()->attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Login successful!');
            
        }

        return redirect('/')->withErrors(['loginname' => 'Invalid credentials.']); // Redirect with error message
    }

    public function register(Request $request)
{
    $incomingFields = $request->validate([
        'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'password' => ['required', 'min:3', 'max:30'],
    ]);

    $incomingFields['password'] = bcrypt($incomingFields['password']);
    $user = User::create($incomingFields);
    auth()->login($user);
    return redirect('/');
}
public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return view('success');
        } else {
            // Authentication failed
            return view('false');
        }
    }
      
}
