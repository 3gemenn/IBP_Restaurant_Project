
@extends('layouts.adminpage')
@section('_content')


    <div class="page-header">
        <div class="row">
            <h3 class="page-title"> Sliders </h3>
            <a class="btn btn-success ml-2" href="{{route('admin_slider_create')}}"> Create </a>
        </div>

    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Images</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        </thead>
        <tbody>
        @foreach(  $slider as $item)
            <tr>
                {{--                    <td>{{$rs->id}}</td>--}}
                <td>{{$item->title}}</td>

                <td>{{$item->images}}</td>

                                    <td><label class="badge badge-warning"><a href="{{route('admin_slider_edit',['id'=> $item->id])}}" >EDIT</a></label></td>
                                    <td><label class="badge badge-danger"><a href="{{route('admin_slider_delete',['id'=> $item->id])}}"
                                                                             onclick="return confirm('Delete ! Are you sure ?')">DELETE</a></label></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


