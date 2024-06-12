<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('login', [
            'page' => 'Login'
        ]);
    }

    public function authenticate(Request $request)

    {
        $credentials = $request->validate([
            'email' => 'required|min:3',
            'password' => 'required|min:5',
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->level == 'Admin') {
                $request->session()->regenerate();
                return redirect()->intended('/admin');
            }
        }

        return back()->with('messageError', 'Login gagal, coba ulangi kembali!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
