@extends('admin.layout.layout_admin')
@section('title')
Add News
@endsection
@section('section')

<center><h3 >News Form</h3></center>
<form style="width:50%;margin:auto;border:1px solid #000000;border-radius:25px;padding:15px;background-color:#2E3238" action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Title</label>
        <input type="name" name="title" class="form-control" id="exampleFormControlInput1">
      </div>

     <!-- select reporter -->
     <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Reporter</label>
        <select name="reporter" id="exampleFormControlInput1" class="form-control">
        <option>Select....</option>
        @foreach($r as $rep)
        <option>{{$rep->name}}</option>
        @endforeach
        </select>
     </div>

    <!-- select category -->
    <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Category</label>
        <select name="category" id="exampleFormControlInput1" class="form-control">
        <option>Select....</option>
        @foreach($cat_name as $cat)
        <option >{{$cat->cname}}</option>
        @endforeach
        </select>
     </div>

     <!-- image -->
     <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Image</label>
    </br>
        <input type="file" name="image"  id="exampleFormControlInput1">
    </div>

     <!-- description -->
     <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Description</label>
        </br>
        <textarea name="description" class="form-control" id="exampleFormControlInput1" cols="84" rows="10"></textarea>
     </div>


      <button type="submit" class="btn btn-light" name="submit" id="submit">Submit</button><br><br>
    
  </form>
@endsection