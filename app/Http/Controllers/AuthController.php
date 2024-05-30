<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\AkunPengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:akun_pengguna',
            'password' => 'required|string|min:5|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('signup')
                        ->withErrors($validator)
                        ->withInput();
        }

        AkunPengguna::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('akun_pengguna')->attempt($credentials)) {
            return redirect()->intended('/')->with('success', 'Login berhasil!');
        }
    
        return redirect('login')->with('error', 'Email atau password salah.');
    }
    public function logout(){
        Auth::guard('akun_pengguna')->logout();
        return redirect()->route('login');
    }
}
