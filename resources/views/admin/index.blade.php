@extends('admin.layout.layout_admin')
@section('title')
Dashboard
    @endsection
    
@section('section')
<style>

    .flex-container {
  display: flex;
  background-color: #E7E6E6;
  color:azure;
}

.flex-container > div {
  background-color: #2E3238;
  margin: 5%;
  padding: 2%;
  font-size: 20px;
}
    </style>
<center><h3>Welcome to Online Khabar</h3></center><br>
<div style="height:auto;width:60%;padding-top: 2%;padding-left:1%;padding-bottom:1%;background-color:#E7E6E6;border-radius:20px;margin:auto">


<div class="flex-container">
    <div>Total categories:&nbsp;{{$categorycount}}</div>
    <div>Total no. of news:&nbsp;{{$newsCount}}</div>
    <div>No of reporters:&nbsp;{{$reporterCount}}</div>  
  </div>
  
</div>   
    @endsection
