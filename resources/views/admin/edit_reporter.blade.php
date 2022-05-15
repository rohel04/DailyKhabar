@extends('admin.layout.layout_admin')
@section('title')
Add Reporters
@endsection
@section('section')
<form style="width:50%;margin:auto;border:1px solid black;border-radius:25px;padding:15px;background-color:#2E3238" action ="{{route('reporters.update',['reporter'=>$reporter->id])}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1" style="color: white">Full Name</label>
        <input type="name" name="name" value="{{$reporter->name}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
    <div class="form-group">
      <label for="exampleFormControlInput1" style="color: white">Email address</label>
      <input type="email" name="email" value="{{$reporter->email}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" style="color: white">Address</label>
        <input type="address" name="address" value="{{$reporter->address}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <button type="submit" class="btn btn-light" name="submit" id="submit">Save</button><br><br>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
  </form>
@endsection