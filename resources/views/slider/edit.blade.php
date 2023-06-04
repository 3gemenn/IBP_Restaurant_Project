@extends('layouts.adminpage')

@section('title','Slider')
@section('_content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Slider Edit </h3>

        </div>
        <form action="{{ route('editSlider')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Title</label>
                            <input id="title" type="text" value="{{$data->title}}" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Images</label>
                            <input id="images" type="file" value="{{$data->images}}" name="images" class="form-control">
                        </div>

                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update Slider</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>




@endsection

