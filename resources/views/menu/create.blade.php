@extends('layouts.adminpage')

@section('title','Add Menu')


@section('_content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add Menu </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{route('createMenu')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" class="form-control"name="title"  placeholder="Title">
                        </div>

                        <div class="form-group">
                            <label >Content</label>
                            <input type="text" class="form-control"name="content"  placeholder="Content">
                        </div>


                        <button type="submit" class="btn btn-primary mr-2"> Add Menu </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
