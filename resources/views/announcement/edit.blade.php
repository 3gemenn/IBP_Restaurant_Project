@extends('layouts.adminpage')

@section('title','Announcement')
@section('_content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Announcement Edit </h3>

        </div>
        <form action="{{ route('editAnnouncement')}}" method="post" >
            @csrf
            <div>
                <div class="card">
                    <div class="card-body">

                        <input type="hidden" name="id" value="{{$data->id}}"/>
                        <div class="form-group">
                            <label>Title</label>
                            <input id="title" type="text" value="{{$data->title}}" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label >Content</label>
                            <input id="description" type="text" value="{{$data->description}}" name="description" class="form-control">
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update Announcement</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection

