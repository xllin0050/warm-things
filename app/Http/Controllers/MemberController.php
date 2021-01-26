<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $id=Auth::user()->id;
        $user = User::find($id);
        $orders = Order::where('user_id',$id)->get();
        return view('front.member.index',compact('user','orders'));
    }

    public function update(Request $request)
    {
        $id=Auth::user()->id;
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
