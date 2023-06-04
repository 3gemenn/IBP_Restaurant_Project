@extends('layouts.adminpage')

@section('title','Add Announcement')


@section('_content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add Announcement </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{route('createAnnouncement')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" class="form-control"name="title"  placeholder="Title">
                        </div>

                        <div class="form-group">
                            <label >Description</label>
                            <input type="text" class="form-control"name="description"  placeholder="Description">
                        </div>


                        <button type="submit" class="btn btn-primary mr-2"> Add Announcement </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
