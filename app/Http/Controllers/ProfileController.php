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

        $users = AkunPengguna::all();

        
        return view('events.index')->with('events', $users);
    }
    
    public function index(){
        $user = Auth::guard('akun_pengguna')->user();

    
        
        return view('profile', compact('user'));
    }
    
}
