@extends('layout.layout')
@section('title')
    DailyKhabar
@endsection


@section('body')
<div class="row" style="margin: 5px;">
@foreach($news as $news)
<div class="card" style="width: 25rem;margin: 38px 20px;">
        <img class="card-img-top" src="{{URL::asset('/uploads/'.$news->img_path)}}" height=250 width=400 alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$news->title}}</h5>
          <h6 class="card-title"><span class="text-danger">Date: {{$news->created_at->todatestring()}}</span></h6>
          <p class="card-text" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;line-clamp: 1;-webkit-box-orient: vertical;">{{$news->description}}</p>
          <a href="{{route('readmore',['id'=>$news->id])}}" class="btn btn-dark">Read More</a>
        </div>
</div>   
@endforeach
<br>
</div>
@endsection