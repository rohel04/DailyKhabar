<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\news;
use App\Models\Reporter;
use Illuminate\Support\Facades\DB;

class ViewerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
       
        $news=news::orderBy('created_at','desc')->get();
        $category=category::all();
        return view('index',compact('category','news'));
        
    }

    // public function sports(){

    //     $news=news::where('category','Sports')->get();
    //     $category=category::all();
    //     return view('sports',compact('category','news'));
    // }

    public function cat($cname){

        $news=news::where('category',$cname)->get();
        $category=category::all();
       
        if($news->count()<=0){
            return view('nonews',compact('category','news'));
        }
        else
        return view('sports',compact('category','news'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news=news::find($id);
        $category=category::all();
        $allnews=news::orderBy('created_at','desc')->get();
        $cat=$news->category;
        $related_news=news::where('category',$cat)->where('id','!=',$id)->get();
        return view('readmore',compact('news','category','related_news','allnews'));
    }

    // $users = DB::table('users')
    // ->where('votes', '=', 100)
    // ->where('age', '>', 35)
    // ->get();







    public function rn_listing($name){
        $news=news::where('reporter',$name)->get();
        $category=category::all();
        return view('rn_listing',compact('news','category'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
