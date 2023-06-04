@extends('layouts.adminpage')

    <!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Message</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/exampl
    s/carousel/">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


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
@section('_content')
    <body>
    <div class="card direct-chat direct-chat-primary">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title">Direct Chat</h3>
        </div>
        {{--    @foreach( $view->message as $item)--}}
        <form action="{{ route('adminChatPost', ['id' => 21]) }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="direct-chat-messages">
{{--                    @foreach( $view->youChat as $item)--}}
{{--                        <div class="direct-chat-msg">--}}
{{--                            <div class="direct-chat-infos clearfix">--}}
{{--                                <span class="direct-chat-name float-left">Admin</span>--}}
{{--                                <span class="direct-chat-timestamp float-right">{{$item->created_date}}</span>--}}
{{--                            </div>--}}

{{--                            <img class="direct-chat-img" src="{{asset('assets')}}/admin/dist/img/user1-128x128.jpg" alt="message user image">--}}

{{--                            <div class="direct-chat-text">--}}
{{--                                {{$item->content}}--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    @endforeach--}}
                    @foreach( $view->meChat as $item)
                        <input type="hidden" name="id" value="{{$item->sendUserId}}"/>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Me</span>
                                <span class="direct-chat-timestamp float-left">{{$item->created_date}}</span>
                            </div>

                            <img class="direct-chat-img" src="{{asset('assets')}}/admin/dist/img/user3-128x128.jpg" alt="message user image">

                            <div class="direct-chat-text">
                                {{$item->content}}
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>
            {{--    @endforeach--}}
            <div class="card-footer">
                <div class="input-group">
                    <input type="text" name="content" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
<button type="submit" class="btn btn-primary">Send</button>
</span>
                </div>
            </div>
        </form>
    </div>

    </div>
    @endsection
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

    </body>

