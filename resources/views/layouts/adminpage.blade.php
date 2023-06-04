<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/summernote/summernote-bs4.min.css">
    <script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwRGFzaGJvYXJkJTIyJTJDJTIyeCUyMiUzQTAuMzY2NzcxNDI2NDkxMDc3OTclMkMlMjJ3JTIyJTNBMTI4MCUyQyUyMmglMjIlM0ExMDI0JTJDJTIyaiUyMiUzQTg4MSUyQyUyMmUlMjIlM0ExMjgwJTJDJTIybCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGYWRtaW5sdGUuaW8lMkZ0aGVtZXMlMkZ2MyUyRiUyMiUyQyUyMnIlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmFkbWlubHRlLmlvJTJGJTIyJTJDJTIyayUyMiUzQTI0JTJDJTIybiUyMiUzQSUyMlVURi04JTIyJTJDJTIybyUyMiUzQS0xODAlMkMlMjJxJTIyJTNBJTVCJTVEJTdE"></script><script nonce="e2ee6b5b-2419-4891-a1c0-32582e7ce60f">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script><style type="text/css">/* Chart.js */
        @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style><style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style></head>
<body class="sidebar-mini layout-fixed vsc-initialized" style="height: auto;">
<div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
        <img class="animation__shake" src="{{asset('assets')}}/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" style="display: none;">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>


        </ul>

        <ul class="navbar-nav ml-auto">

        </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="/admin" class="brand-link">
            <img src="{{asset('assets')}}/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light" >Restaurant</span>
        </a>

        <div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-transition os-host-scrollbar-vertical-hidden os-host-scrollbar-horizontal-hidden"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 879px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style=""><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">

                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src="{{asset('assets')}}/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">

                                @if (session()->has('user_id'))
                                    <a class="nav-link " href="http://127.0.0.1:8000/account/profile"> {{ session('username') }}</a>
                                    <a class="nav-link " href="/logout">Logout</a>
                                @else
                                    <a href="#" class="d-block">Egemen Öztoprak</a>
                                @endif
                            </div>
                        </div>

{{--                        <div class="form-inline">--}}
{{--                            <div class="input-group" data-widget="sidebar-search">--}}
{{--                                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                                <div class="input-group-append">--}}
{{--                                    <button class="btn btn-sidebar">--}}
{{--                                        <i class="fas fa-search fa-fw"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>--}}
{{--                        </div>--}}

                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                                <li class="nav-item menu-open">
                                    <a href="http://127.0.0.1:8000/menu/list" class="nav-link active">
                                        <i class="nav-icon fas fa-circle"></i>
                                        <p>
                                            Menu
                                        </p>
                                    </a>
                                    <a href="http://127.0.0.1:8000/user/list" class="nav-link active">
                                        <i class="nav-icon fas fa-circle"></i>
                                        <p>
                                            User
                                        </p>
                                    </a>
                                    <a href="http://127.0.0.1:8000/message/list" class="nav-link active">
                                        <i class="nav-icon fas fa-circle"></i>
                                        <p>
                                            Message
                                        </p>
                                    </a>
                                    <a href="http://127.0.0.1:8000/comment/list" class="nav-link active">
                                        <i class="nav-icon fas fa-circle"></i>
                                        <p>
                                            Comment
                                        </p>
                                    </a>

                                    <a href="http://127.0.0.1:8000/slider/list" class="nav-link active">
                                        <i class="nav-icon fas fa-circle"></i>
                                        <p>
                                            Slider
                                        </p>
                                    </a>
                                    <a href="http://127.0.0.1:8000/announcement/list" class="nav-link active">
                                        <i class="nav-icon fas fa-circle"></i>
                                        <p>
                                            Announcement
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </nav>

                    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>

    </aside>

    <div class="content-wrapper" style="min-height: 823px;">



        <section class="content">
            <div class="container-fluid">


{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}

{{--                        <div class="small-box bg-info">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>150</h3>--}}
{{--                                <p>New Orders</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-bag"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3 col-6">--}}

{{--                        <div class="small-box bg-success">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
{{--                                <p>Bounce Rate</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-stats-bars"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3 col-6">--}}

{{--                        <div class="small-box bg-warning">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>44</h3>--}}
{{--                                <p>User Registrations</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-person-add"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3 col-6">--}}

{{--                        <div class="small-box bg-danger">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>65</h3>--}}
{{--                                <p>Unique Visitors</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="ion ion-pie-graph"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="maina">--}}
                    @yield('_content')

{{--                </div>--}}
            </div>
        </section>

    </div>

    <footer class="main-footer">
        <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark" style="display: none; top: 57px; height: 880px;">

        <div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition" style="height: 880px;"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: -16px; width: 0px; height: 0px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible"><div class="os-content" style="padding: 16px; height: 100%; width: 100%;"><h5>Customize AdminLTE</h5><hr class="mb-2"><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div><h6>Header Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div><h6>Sidebar Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar Mini</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div><h6>Footer Options</h6><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><h6>Small Text Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div><h6>Navbar Variants</h6><div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white"><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option></select></div><h6>Accent Color Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Dark Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Light Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Brand Logo Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option><a href="#">clear</a></select></div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div></aside>

    <div id="sidebar-overlay"></div></div>


{{--<script src="{{asset('assets')}}/admin/plugins/jquery/jquery.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{asset('assets')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('assets')}}/admin/plugins/chart.js/Chart.min.js"></script>

<script src="{{asset('assets')}}/admin/plugins/sparklines/sparkline.js"></script>

<script src="{{asset('assets')}}/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="{{asset('assets')}}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="{{asset('assets')}}/admin/plugins/moment/moment.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/daterangepicker/daterangepicker.js"></script>

<script src="{{asset('assets')}}/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="{{asset('assets')}}/admin/plugins/summernote/summernote-bs4.min.js"></script>

<script src="{{asset('assets')}}/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="{{asset('assets')}}/admin/dist/js/adminlte.js?v=3.2.0"></script>

<script src="{{asset('assets')}}/admin/dist/js/demo.js"></script>

<script src="{{asset('assets')}}/admin/dist/js/pages/dashboard.js"></script>

@section("Scripts")
<div class="daterangepicker ltr show-ranges opensright"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div><div class="jqvmap-label" style="display: none; left: 1342.98px; top: 539.016px;">Alaska</div><div id="h10-xray"></div><div id="h10-xray-keywords"></div><div id="h10-asin-grabber"></div><div id="h10-demand"></div><div id="h10-inventory"></div><div id="h10-profitability-calculator"></div><div id="h10-review"></div><div id="h10-xray-walmart"></div><div id="h10-token-connection"></div><div id="h10-page-widget"></div><script>
    function returnCommentSymbol(language = "javascript") {
        const languageObject = {
            bat: "@REM",
            c: "//",
            csharp: "//",
            cpp: "//",
            closure: ";;",
            coffeescript: "#",
            dockercompose: "#",
            css: "/*DELIMITER*/",
            "cuda-cpp": "//",
            dart: "//",
            diff: "#",
            dockerfile: "#",
            fsharp: "//",
            "git-commit": "//",
            "git-rebase": "#",
            go: "//",
            groovy: "//",
            hlsl: "//",
            html: "<!--DELIMITER-->",
            ignore: "#",
            ini: ";",
            java: "//",
            javascript: "//",
            javascriptreact: "//",
            json: "//",
            jsonc: "//",
            julia: "#",
            latex: "%",
            less: "//",
            lua: "--",
            makefile: "#",
            markdown: "<!--DELIMITER-->",
            "objective-c": "//",
            "objective-cpp": "//",
            perl: "#",
            perl6: "#",
            php: "<!--DELIMITER-->",
            powershell: "#",
            properties: ";",
            jade: "//-",
            python: "#",
            r: "#",
            razor: "<!--DELIMITER-->",
            restructuredtext: "..",
            ruby: "#",
            rust: "//",
            scss: "//",
            shaderlab: "//",
            shellscript: "#",
            sql: "--",
            svg: "<!--DELIMITER-->",
            swift: "//",
            tex: "%",
            typescript: "//",
            typescriptreact: "//",
            vb: "'",
            xml: "<!--DELIMITER-->",
            xsl: "<!--DELIMITER-->",
            yaml: "#"
        }
        if(!languageObject[language]){
            return languageObject["python"].split("DELIMITER")
        }
        return languageObject[language].split("DELIMITER")
    }
    var savedChPos = 0
    var returnedSuggestion = ''
    let editor, doc, cursor, line, pos
    pos = {line: 0, ch: 0}
    var suggestionsStatus = false
    var docLang = "python"
    var suggestionDisplayed = false
    var isReturningSuggestion = false
    document.addEventListener("keydown", (event) => {
        setTimeout(()=>{
            editor = event.target.closest('.CodeMirror');
            if (editor){
                const codeEditor = editor.CodeMirror
                if(!editor.classList.contains("added-tab-function")){
                    editor.classList.add("added-tab-function")
                    codeEditor.removeKeyMap("Tab")
                    codeEditor.setOption("extraKeys", {Tab: (cm)=>{

                            if(returnedSuggestion){
                                acceptTab(returnedSuggestion)
                            }
                            else{
                                cm.execCommand("defaultTab")
                            }
                        }})
                }
                doc = editor.CodeMirror.getDoc()
                cursor = doc.getCursor()
                line = doc.getLine(cursor.line)
                pos = {line: cursor.line, ch: line.length}

                if(cursor.ch > 0){
                    savedChPos = cursor.ch
                }

                const fileLang = doc.getMode().name
                docLang = fileLang
                const commentSymbol = returnCommentSymbol(fileLang)
                if (event.key == "?"){
                    var lastLine = line
                    lastLine = lastLine.slice(0, savedChPos - 1)

                    if(lastLine.trim().startsWith(commentSymbol[0])){
                        if(fileLang !== "null"){
                            lastLine += " "+ fileLang
                        }

                        lastLine = lastLine.split(commentSymbol[0])[1]
                        window.postMessage({source: 'getQuery', payload: { data: lastLine } } )
                        isReturningSuggestion = true
                        displayGrey("\nBlackbox loading...")
                    }
                }else if(event.key === "Enter" && suggestionsStatus && !isReturningSuggestion){
                    var query = doc.getRange({ line: Math.max(0,cursor.line-50), ch: 0 }, { line: cursor.line, ch: line.length })
                    window.postMessage({source: 'getSuggestion', payload: { data: query, language: docLang, cursorPos: pos } } )
                    displayGrey("Blackbox loading...")
                }else if(event.key === "ArrowRight" && returnedSuggestion){
                    acceptTab(returnedSuggestion)
                }else if(event.key === "Enter" && isReturningSuggestion){
                    displayGrey("\nBlackbox loading...")
                }else if(event.key === "Escape"){
                    displayGrey("")
                }
            }
        }, 0)
    })

    function acceptTab(text){
        if (suggestionDisplayed){
            displayGrey("")
            doc.replaceRange(text, pos)
            returnedSuggestion = ""
            updateSuggestionStatus(false)
        }
    }
    function acceptSuggestion(text){
        displayGrey("")
        doc.replaceRange(text, pos)
        returnedSuggestion = ""
        updateSuggestionStatus(false)
    }
    function displayGrey(text){
        if(!text){
            document.querySelector(".blackbox-suggestion").remove()
            return
        }
        var el = document.querySelector(".blackbox-suggestion")
        if(!el){
            el = document.createElement('span')
            el.classList.add("blackbox-suggestion")
            el.style = 'color:grey'
            el.innerText = text
        }
        else{
            el.innerText = text
        }

        var lineIndex = pos.line;
        editor.getElementsByClassName('CodeMirror-line')[lineIndex].appendChild(el)
    }
    function updateSuggestionStatus(s){
        suggestionDisplayed = s
        window.postMessage({source: 'updateSuggestionStatus', status: suggestionDisplayed, suggestion: returnedSuggestion})
    }
    window.addEventListener('message', (event)=>{
        if (event.source !== window ) return
        if (event.data.source == 'return'){
            isReturningSuggestion = false
            const formattedCode = formatCode(event.data.payload.data)
            returnedSuggestion = formattedCode
            displayGrey(formattedCode)
            updateSuggestionStatus(true)
        }
        if(event.data.source == 'suggestReturn'){
            const prePos = event.data.payload.cursorPos
            if(pos.line == prePos.line && pos.ch == prePos.ch){
                returnedSuggestion = event.data.payload.data
                displayGrey(event.data.payload.data)
                updateSuggestionStatus(true)
            }
            else{
                displayGrey()
            }
        }
        if(event.data.source == 'codeSearchReturn'){
            isReturningSuggestion = false
            displayGrey()
        }
        if(event.data.source == 'suggestionsStatus'){
            suggestionsStatus = event.data.payload.enabled
        }
        if(event.data.source == 'acceptSuggestion'){

            acceptSuggestion(event.data.suggestion)
        }
    })
    document.addEventListener("keyup", function(){
        returnedSuggestion = ""
        updateSuggestionStatus(false)
    })
    function formatCode(data) {
        if (Array.isArray(data)) {
            var finalCode = ""
            var pairs = []

            const commentSymbol = returnCommentSymbol(docLang)
            data.forEach((codeArr, idx) => {
                const code = codeArr[0]
                var desc = codeArr[1]
                const descArr = desc.split("\n")
                var finalDesc = ""
                descArr.forEach((descLine, idx) => {
                    const whiteSpace = descLine.search(/\S/)
                    if (commentSymbol.length < 2 || idx === 0) {
                        finalDesc += insert(descLine, whiteSpace, commentSymbol[0])
                    }
                    if (commentSymbol.length > 1 && idx === descArr.length - 1) {
                        finalDesc = finalDesc + commentSymbol[1] + "\n"
                    }
                })

                finalCode += finalDesc + "\n\n" + code
                pairs.push(finalCode)
            })
            return "\n"+pairs.join("\n")
        }

        return "\n"+data
    }

    function insert(str, index, value) {
        return str.substr(0, index) + value + str.substr(index)
    }
</script></body></html>
