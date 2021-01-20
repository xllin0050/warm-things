<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    use AuthenticatesUsers, RegistersUsers {
        AuthenticatesUsers::redirectPath insteadof RegistersUsers;
        AuthenticatesUsers::guard insteadof RegistersUsers;
    }


    protected $redirectTo = RouteServiceProvider::HOME;

    public function index()
    {
        return view('admin.index');
    }

    public function showAdminLoginForm()
    {
        return view('auth.admin.login');
    }

    public function showAdminRegistrationForm()
    {
        return view('auth.admin.register');
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }
    // protected function createAdmin(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'type' => 'admin',
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
    
    // public function adminRegister(Request $request)
    // {
    //     $this->validator($request->all())->validate();

    //     event(new Registered($user = $this->createAdmin($request->all())));

    //     $this->guard()->login($user);

    //     if ($response = $this->registered($request, $user)) {
    //         return $response;
    //     }

    //     return $request->wantsJson()
    //                 ? new JsonResponse([], 201)
    //                 : redirect($this->redirectPath());
    // }
    
    public function adminRegister(Request $request){
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'type' => 'admin',
            'password' => Hash::make($request['password']),
        ]);
    }
    
}
