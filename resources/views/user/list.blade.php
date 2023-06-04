
@extends('layouts.adminpage')

@section('_content')

    <div class="page-header">
        <div class="row">
        <h3 class="page-title"> Users </h3>
        <a class="btn btn-success ml-2" href="{{route('admin_user_create')}}"> Create </a>
        </div>
    </div>
    <table class="table" >
        <thead>
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Password</th>
            <th>Created Date</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $user as $item)
            <tr>
                {{--                    <td>{{$rs->id}}</td>--}}
                <td>{{$item->name}}</td>
                <td>{{$item->lastName}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->password}}</td>
                <td>{{$item->created_date}}</td>
                                    <td><label class="badge badge-warning"><a href="{{route('admin_user_edit',['id'=> $item->id])}}" >EDIT</a></label></td>
                                    <td><label class="badge badge-danger"><a href="{{route('admin_user_delete',['id'=> $item->id])}}"
                                                                             onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


