@extends('admin.layout.layout_admin')
@section('title')
 Reporters   
@endsection
@section('section')
<table class="table table-dark" style="width:70%;margin:auto;">
    <thead class="thead-dark">
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <span style="display: none">{{$i=1}}<span>
        @foreach($reporters as $reporter)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$reporter->name}}</td>
            <td>{{$reporter->email}}</td>
            <td>{{$reporter->address}}</td>
            
            <td><a href="{{route('reporters.edit',['reporter'=>$reporter->id])}}" class="mr-4"><button type="button" class="btn btn-info btn-sm">Edit</button>
            </a>
                <a href="{{route('reporters.delete',['reporter'=>$reporter->id])}}" class="mr-4"><button type="button" class="btn btn-danger btn-sm">Delete</button>
                </a></td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection