<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporter;


class ReporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $reporters=Reporter::all();
        return view('admin/reporters', compact('reporters'));
    }
    public function index()
    {
        return view('admin.add_rep');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'address' => 'required'
            ]
        );
        $reporterStore=new Reporter();
        $reporterStore->name=$request->name;
        $reporterStore->email=$request->email;
        $reporterStore->address=$request->address;
        $reporterStore->save();
        return redirect()->route('reporters.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($reporters)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporter $reporter)
    {
        return view('admin.edit_reporter',compact('reporter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporter $reporter)
    {
        $validate=$request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'address'=>'required'
            ]
            );
            $reporter->name=$request->name;
            $reporter->email=$request->email;
            $reporter->address=$request->address;
            $reporter->save();
            return redirect()->route('reporters.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporter $reporter)
    {
        $reporter->delete();
        return redirect()->route('reporters.list');
    }
    
}
