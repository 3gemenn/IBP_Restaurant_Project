
@extends('layouts.adminpage')
@section('_content')


    <div class="page-header">
        <div class="row">
            <h3 class="page-title"> Comments </h3>
        </div>

    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Content</th>
            <th>User Id</th>
            <th>Created Date</th>

        </tr>
        </thead>
        <tbody>

        @foreach(  $comment as $item)
            <tr>
                {{--                    <td>{{$rs->id}}</td>--}}
                <td>{{$item->content}}</td>
                <td>{{$item->user_id}}</td>
                <td>{{$item->created_date}}</td>
{{--                                    <td><label class="badge badge-warning"><a href="{{route('admin_comment_edit',['id'=> $item->id])}}" >EDIT</a></label></td>--}}
{{--{--}}                                    <td><label class="badge badge-danger"><a href="{{route('admin_comment_delete',['id'=> $item->id])}}"
                                                                           onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


