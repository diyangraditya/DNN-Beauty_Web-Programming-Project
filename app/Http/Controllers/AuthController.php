<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\AkunPengguna;
use Illuminate\Support\Facades\Hash;
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

        $user = AkunPengguna::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Login berhasil, bisa simpan informasi sesi atau autentikasi
            return redirect('/')->with('success', 'Login berhasil!');
        }

        return redirect('login')->with('error', 'Email atau password salah.');
    }
}
