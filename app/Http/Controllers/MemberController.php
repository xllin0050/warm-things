<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('front.member.index',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->email = $request->email;
        $user->city = $request->city;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->zip = $request->zip;
        $user->phone = $request->phone;

        $user->save();

        return back();
    }


}
