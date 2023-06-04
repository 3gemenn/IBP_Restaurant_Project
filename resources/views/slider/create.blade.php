
@extends('layouts.adminpage')

@section('title','Add Slider')


@section('_content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add Menu </h3>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{route('createSlider')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" class="form-control"name="title"  placeholder="title">
                        </div>

                        <div class="form-group">
                            <label >Images</label>
                            <input type="file" class="form-control"name="images"  placeholder="images">
                        </div>


                        <button type="submit" class="btn btn-primary mr-2"> Add Slider </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
