<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserRegController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function showAdminRegistrationForm()
    {
        return view('auth.admin.register');
    }

    public function adminRegister(Request $request){
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'type' => 'admin',
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/admin');
    }

}
