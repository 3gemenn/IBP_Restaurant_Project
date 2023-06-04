<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Restaurant</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">


    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }

        }
    </style>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="modals.css" rel="stylesheet">

</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://127.0.0.1:8000/">Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item" >
                        <a class="nav-link active" aria-current="page" href="/home/menu">Menu</a>
                    </li>
                    @if (session()->has('user_id'))
                        <li>
                            <a class="nav-link active" aria-current="page" href="/chat/message">Message</a>
                        </li>
                    @endif
                </ul>
                @if (session()->has('user_id'))
                    <a class="nav-link " href="http://127.0.0.1:8000/account/profile/{{session('user_id')}}">Welcome {{ session('username') }}</a>
                    <a class="nav-link " href="/logout">Logout</a>
                @else
                    <form class="d-flex">
                        <a class="nav-link " href="http://127.0.0.1:8000/account/login">Log-in</a>
                        <a class="nav-link" href="http://127.0.0.1:8000/account/register">Sign-up</a>
                    </form>
                @endif

            </div>
        </div>
    </nav>
</header>

<main>
@yield("modal")
    @yield("slider")
    @yield("chat")

    @yield("_content")

    <div class="container" >
        <div class="row" >
            <div class="col-md-7 " >
                <div class="list-group">

                    @yield("menus")
{{--                    @foreach( $menu as $item)--}}
{{--                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">--}}
{{--                            <div class="d-flex w-100 justify-content-between">--}}
{{--                                <h5 class="mb-1"> {{$item->title}} </h5>--}}
{{--                                <small>{{$item->created_date}}</small>--}}

{{--                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--                                    Launch demo modal--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <p class="mb-1">{{$item->content}}</p>--}}
{{--                            <small>And some small print.</small>--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
                </div>
            </div>
            <div class="col-md-5">
                <div class="list-group">
                    @yield("announcemets")
{{--                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">--}}
{{--                        <div class="d-flex w-100 justify-content-between">--}}
{{--                            <h5 class="mb-1">List group item heading</h5>--}}
{{--                            <small>3 days ago</small>--}}
{{--                        </div>--}}
{{--                        <p class="mb-1">Some placeholder content in a paragraph.</p>--}}
{{--                        <small>And some small print.</small>--}}
{{--                    </a>--}}
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="container">
        <p>&copy; 2023 Company, Inc. </p>
    </footer>
</main>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
