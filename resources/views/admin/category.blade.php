@extends('admin.layout.layout_admin')
@section('title')
 Categories   
@endsection
@section('section')
<span style="display: none">{{$i=1}}</span>
<table class="table table-dark" style="width:70%;margin:auto;">
    <thead class="thead-dark">
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Full Name</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($category as $cat)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$cat->cname}}</td>
            <td>{{$cat->created_at}}</td>
            <td><a href="/category/edit/{{$cat->id}}" ><button type="button" class="btn btn-info btn-sm">Edit</button></a>&nbsp;
            <a href="/category/delete/{{$cat->id}}" onclick="return confirm('Delete?')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection