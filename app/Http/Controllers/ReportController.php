<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports= Report::get();
        return view('admin.report.index',compact('reports'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reports = Report::get();
        return view('admin.report.create', compact('reports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $fileName = Storage::disk('public')->put('/image/report', $request->file('img'));
        $reports=Report::create($request->all());
        $reports->img = storage::url($fileName);
        $reports->save();
        return redirect('/admin/report');
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
        $reports = Report::find($id);
        return view('admin.report.edit',compact('reports'));
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
        $reports=Report::find($id);
        $reports->title = $request->title;
        $reports->date = $request->date;
        $reports->content = $request->content;
        $reports->img = $request->img;

        $fileName = Storage::disk('public')->put('/image/report', $request->file('img'));
        $reports->img = storage::url($fileName);
        $reports->save();
       

        return redirect('/admin/report');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reports=Report::find($id);
        $reports->delete();
        return redirect('admin/report');
    }
}
