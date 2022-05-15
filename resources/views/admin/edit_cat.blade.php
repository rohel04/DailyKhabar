@extends('admin.layout.layout_admin')
@section('title')
Edit Category
@endsection
@section('section')
<center><h3 >Edit Category Form</h3></center>
<form style="width:50%;margin:auto;border:1px solid black;border-radius:25px;padding:15px;background-color:#2E3238" action="{{route('category.update',['category'=>$category->id])}}" method="POST">
  @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Category Name</label>
        <input type="name" value="{{$category->cname}}" name="name" class="form-control" id="exampleFormControlInput1" placeholder="E.g Sports,Politics....">
      </div>
      <button type="submit" class="btn btn-light" name="submit" id="submit">Save</button><br><br>
      
      
      <!-- error checking -->
      
      <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
    
  </form>
@endsection