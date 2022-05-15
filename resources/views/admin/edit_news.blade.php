@extends('admin.layout.layout_admin')
@section('title')
Edit News
@endsection
@section('section')

<center><h3 >Edit Form</h3></center>
<form style="width:50%;margin:auto;border:1px solid black;border-radius:25px;padding:15px;background-color:#2E3238" action="{{route('news.update',['news'=>$news->id])}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Title</label>
        <input type="name" name="title" value="{{$news->title}}" class="form-control" id="exampleFormControlInput1">
      </div>

     <!-- select reporter -->
     <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Reporter</label>
        <select name="reporter" id="exampleFormControlInput1" class="form-control">
        
        
        <option selected value="{{$news->reporter}}">{{$news->reporter}}</option>
        @foreach($r as $rep)
        @if($rep->name!=$news->reporter)
        <option>{{$rep->name}}</option>
        @endif
        @endforeach
        </select>
     </div>

    <!-- select category -->
    <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Category</label>
        <select name="category" id="exampleFormControlInput1" class="form-control">
        <option>Select....</option>
        <option selected value="{{$news->category}}">{{$news->category}}</option>
        @foreach($cat_name as $cat)
            @if($cat->cname!=$news->category)
        <option>{{$cat->cname}}</option>
        @endif
        @endforeach
        </select>
     </div>

     <!-- image -->
     <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Image</label>
    </br>
        <input type="file" name="image" id="exampleFormControlInput1"><img src="{{URL::asset('/uploads/'.$news->img_path)}}" height="100" width="100" alt="Pic">
    </div>

     <!-- description -->
     <div class="form-group">
        <label for="exampleFormControlInput1" style="color:white">Description</label>
        </br>
        <textarea name="description" class="form-control" id="exampleFormControlInput1" cols="84" rows="10">{{$news->description}}</textarea>
     </div>


      <button type="submit" class="btn btn-light" name="submit" id="submit">Save</button><br><br>
    
  </form>
@endsection