@extends('layouts.adminpage')

@section('title','Menu')
@section('_content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Menu Edit </h3>

        </div>
        <form action="{{ route('editMenu')}}" method="post" >
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
                            <input id="content" type="text" value="{{$data->content}}" name="content" class="form-control">
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update Menu</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection

