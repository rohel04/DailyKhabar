@extends('admin.layout.layout_admin')
@section('title')
 News   
@endsection
@section('section')
<table class="table table-dark" style="width:76%;margin:auto;">
    
    <thead class="thead-dark">
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Reporter</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
       
        <span style="display: none">{{$i=1}}</span>
        @foreach($result as $news)
        <tr>
            
            <th scope="row">{{$i++}}</th>
            <td>{{$news->title}}</td>

         <td>{{$news->category}}
            <td>{{$news->reporter}}</td>
            <td><img src="uploads/{{$news->img_path}}" width="50" height="50" /></td>
            <td>
            <a href="{{route('news.edit',['news'=>$news->id])}}" class="mr-4" ><button type="button" class="btn btn-info btn-sm">Edit</button></a>
            <a href="{{route('news.delete',['news'=>$news->id])}}" class="mr-4" onclick="return confirm('Delete?')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
        </td>

        </tr>
        
        @endforeach
        
    </tbody>
</table>

@endsection