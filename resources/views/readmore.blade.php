@extends('layout.layout')
@section('body')
    <div style="display: flex;padding: 20px;">
    <div id="main" style="width:69%;height: auto;padding-top:30px;margin-left:10px;margin-right:70px ">
        <h3>{{$news->title}}</h3>
        <h6 >Reported by : <a href="{{route('reporter_news',['r_name'=>$news->reporter])}}">{{$news->reporter}}</a>, <span class="text-danger">{{$news->created_at->todatestring()}}</span></h6><br>
        <img src="/uploads/{{$news->img_path}}" height=420 width=800 alt="{{$news->title}}">
        <div style="text-align: justify;padding-top:25px">
        <p style="line-height: 1.8;font-size:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$news->description}}</p>
        </div>
    </div>
    <div id="related" style="width:30%;padding-top:25px">
        @if(isset($related_news[0]))
       <h4 style="color:#B78700;padding-left:20px">Related Posts:</h4>
        @foreach($related_news as $rn)
          <div class="card" style="width: 25rem;margin: 38px 20px;">
            <img class="card-img-top" src="{{URL::asset('/uploads/'.$rn->img_path)}}" height=250 width=400 alt="Card image cap">
           <div class="card-body">
            <h5 class="card-title">{{$rn->title}}</h5>
            <h6 class="card-title"><span class="text-danger">Date: {{$rn->created_at->todatestring()}}</span></h6>
            <a href="{{route('readmore',['id'=>$rn->id])}}" class="btn btn-dark">Read More</a>
        </div>
    </div>
        @endforeach
        @else
        <h4 style="color: #B78700;padding-left:20px">Latest Posts:</h4>  
        @foreach($allnews as $an)
        <div class="card bg-dark" style="width: 25rem;margin: 38px 20px;">
        <a href="{{route('readmore',['id'=>$an->id])}}" class="text-light" style=""><div class="card-body">
            <h5 class="card-title" >{{$an->title}}</h5></a>
            <h6 class="card-title"><span class="text-danger">Date: {{$an->created_at->todatestring()}} </span></h6>  
        </div>
        </div>
        @endforeach
        @endif

    </div>
    </div>
@endsection