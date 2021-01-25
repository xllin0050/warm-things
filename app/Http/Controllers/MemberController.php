<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index($id)
    {
       
        $user = User::find($id);
        $order = Order::find($id);
        return view('front.member.index',compact('user','order'));
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
