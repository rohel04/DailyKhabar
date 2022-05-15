@extends('layout.layout')

@section('body')
<div class="card" style="padding: 20px;width: 80%;height: 35rem;">
  <div class="card-header">
   
    <h3>{{$news[0]->reporter}}</h3>
    <h5>Reporter, Daily Khabar</h5>
    
  </div>
  <ul class="list-group list-group-flush" style="padding: 10px; margin: 20px;">
    <h5>Contributions:</h5>
    @foreach($news as $n)
    <a href="{{route('readmore',['id'=>$n->id])}}"><li class="list-group-item text-light bg-dark" >{{$n->title}}</li></a></br>
    @endforeach
  </ul>
</div>
@endsection