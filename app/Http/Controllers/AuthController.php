<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('dashboard');
        }

        return redirect()->to('/login')->withErrors([
            'login' => 'Invalid username or password.',
        ]);
    }

    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255|',
            'username' => 'required|string|max:255|unique:users,username',
            'email'    => 'required|email|max:255|unique:users,email',
            'age'      => 'required|integer|min:1',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'username' => $request->username,
            'email'    => $request->email,
            'age'      => $request->age,
            'password' => $request->password,
        ]);

        return redirect()->to('/login')->with('success', 'Account created! Please log in.');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->to('/login');
    }
}





