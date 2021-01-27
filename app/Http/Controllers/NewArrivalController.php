<?php

namespace App\Http\Controllers;

use App\NewArrival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NewArrivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newArrivals= NewArrival::get();
        return view('admin.new_arrival.index',compact('newArrivals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newArrivals = NewArrival::get();
        return view('admin.new_arrival.create', compact('newArrivals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = NewArrival::create($request->all());
        
        if($request->hasFile('img')){
            $filePath = Storage::disk('public')->put('/images/NewArrival',$request->file('img'));
            $requestData->img = Storage::url($filePath);
            $requestData->save();
        }

        return redirect('/admin/new_arrival');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newArrivals = NewArrival::find($id);
        return view('admin.new_arrival.edit',compact('newArrivals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = NewArrival::find($id);
        $item->title=$request->title;
        $item->date=$request->date;
        $item->content=$request->content;

        if($request->hasFile('img')) {
            $filePath = Storage::disk('public')->put('/images/product',$request->file('img'));
            $item->img = Storage::url($filePath);
            $item->save();
        }
    
        return redirect('/admin/new_arrival');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newArrivals=NewArrival::find($id);
        $newArrivals->delete();
        return redirect('admin/new_arrival');

    }
}
