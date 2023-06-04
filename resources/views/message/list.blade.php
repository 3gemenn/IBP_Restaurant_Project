
@extends('layouts.adminpage')
@section('_content')


    <div class="page-header">
        <div class="row">
            <h3 class="page-title"> Messages </h3>
        </div>

    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Content</th>
            <th>ReceiveUserId</th>
            <th>SendUserId</th>
            <th>Created Date</th>
            <th>Is Read</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        </thead>
        <tbody>
        @foreach(  $message as $item)
            <tr>
                <td>{{$item->content}}</td>
                <td>{{$item->sendUserId}}</td>
                <td>{{$item->receiveUserId}}</td>
                <td>{{$item->created_date}}</td>
                <td>{{$item->isRead}}</td>
                                    <td><label class="badge badge-warning"><a href="{{route('admin_message_create',['id'=> $item->sendUserId,'messageId'=>$item->MessageId])}}" >View</a></label></td>
                                    <td><label class="badge badge-danger"><a href="{{route('admin_message_delete',['id'=> $item->id])}}"
                                                                             onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


