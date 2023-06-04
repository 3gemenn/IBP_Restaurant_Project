@extends('layouts.homepage')
<link href="carousel.css" rel="stylesheet">
<link href="modals.css" rel="stylesheet">
{{--@section('comment')--}}
{{--    --}}
{{--@endsection--}}

@section("modal")
    @foreach( $view->menuList as $item)

    <div class="modal fade" id="exampleModal{{$item->menu_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Menü İçeriği</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{$item->menu_content}}
                </div>
{{--                @yield('comment')--}}


                    <form action="{{ route('createComment' , ['id'=> $item->menu_id])}} " method="post">
                        @csrf

                        <div>
                            <label>Comments</label>
                            <input type="text" id="content" name="content">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <p>-----------------------------------------------------------------------------</p>
                        </div>
                    </form>
            @foreach($item->comment as $item2)
                <div class="row" {{$item2->id}}>
                                            <label>
                                                {{$item2->content}}
                                                {{$item2->created_date}}
                                            </label>
                                        </div>
                    @endforeach
{{--                @foreach($view->comment as $item2)--}}

{{--                    <div class="row" {{$item2->id}}>--}}
{{--                        <label>--}}
{{--                            {{$item2->content}}--}}
{{--                            {{$item2->created_date}}--}}
{{--                        </label>--}}
{{--                    </div>--}}

{{--                @endforeach--}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
@section("menus")
@foreach( $view->menu as $item)
    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"> {{$item->title}} </h5>
            <small>{{$item->created_date}}</small>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                İçerik
            </button>
        </div>
    </a>
@endforeach
@endsection
@section("announcemets")
    @foreach( $view->announcemet as $item)

        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$item->title}}</h5>
{{--                <small>{{$item->created_date}}</small>--}}
            </div>
            <p class="mb-1">{{$item->description}}</p>

        </a>

    @endforeach
@endsection
@section("slider")
    @foreach( $view->slider as $item)
<div id="myCarousel{{$item->id}}" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

        <div class="carousel-item active" >
{{--            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>--}}
            <img class="bd-placeholder-img" src="{{Storage:: url($item->images)}} " id="{{$item->id}}" width="100%" height="65%">
            <div class="container">
                <div class="carousel-caption text-start" style="color: #0000cc">
                   <b> <h1>{{$item->title}}</h1></b>
                </div>
            </div>
        </div>
        @endforeach
        @foreach($view->slider as $item)
            <div class="carousel-item ">
                <img class="bd-placeholder-img" src="{{Storage:: url($item->images)}} " width="100%" height="65%">
                <div class="container">
                    <div class="carousel-caption  text-start" style="color: #0000cc">
                        <b><h1>{{$item->title}}</h1></b>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    @foreach($view->slider as $item)
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel{{$item->id}}" data-bs-slide="prev" >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel{{$item->id}}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
    @endforeach
@endsection



