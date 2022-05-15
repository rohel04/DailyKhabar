<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reporter;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $result=DB::table('news')
        // ->join('reporters','reporters.id',"=",'news.reporter')
        // ->select('reporters.name')
        // ->get();
        
        // $cat_name=category::select('id','cname')->get();
        // $r=Reporter::select('id','name')->get();
        // $n=news::all();
        // return view('admin.news',compact('result','n','cat_name','r'));
        $result=news::all();
        return view('admin.news',compact('result'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat_name=category::select('id','cname')->get();
        $r=Reporter::select('id','name')->get();
        return view('admin.add_news',compact('cat_name','r'));
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $n=new news();
        $n->title=$request->title;
        $n->reporter=$request->reporter;
        $n->category=$request->category;
        // $n->img_path=$request->img_path;
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->extension();
            $filename=time().'.'.$extension;
        
            $file->move('uploads',$filename);
            $n->img_path=$filename;
        }

        $n->description=$request->description;
        $n->save();
        return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        $cat_name=category::select('id','cname')->get();
        $r=Reporter::select('id','name')->get();
        
        return view('admin.edit_news',compact('news','cat_name','r'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news)
    {

        $news->title=$request->title;
        $news->reporter=$request->reporter;
        $news->category=$request->category;
     
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->extension();
            $filename=time().'.'.$extension;
        
            $file->move('uploads',$filename);
            
            $news->img_path=$filename;
        }
        $news->description=$request->description;
        $news->save();
        return redirect('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }
}
