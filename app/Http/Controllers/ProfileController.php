<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AkunPengguna;


class ProfileController extends Controller
{
    public function show()
    {
        // $user = Auth::user();

        // Mengakses relasi untuk mendapatkan data akun pengguna
        // $akunPengguna = $user->akunPengguna;

        // $user akan berisi informasi dari model User,
        // sedangkan $akunPengguna akan berisi informasi dari model AkunPengguna

        // return view('events.show')
        //     ->with('name', $name)
        //     ->with('email', $email);

        $users = AkunPengguna::all();

        
        return view('events.index')->with('events', $users);
    }
    
    public function index(){
        $users = AkunPengguna::all();
    
        
        return view('/profile', compact('users'));
    }
}
