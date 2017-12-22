<!DOCTYPE html>
<html>
    <head>
        <title>iBLOG</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{URL::to('assets/css/app.css')}}" />
        <link rel="stylesheet" href="{{URL::to('assets/css/blueimp-gallery.min.css')}}" />
        <style>
            html,body{
                padding: 0;
                margin:0;
            }
            .nav_li{
                padding: 15px;
                display: block;
                font-size: 14px;
                color: #3c3c3c;
                cursor: pointer;
                text-decoration:none;
            }
            .nav_li:hover{
                color: lightblue;
                text-decoration:none;
            }
            .nav_focus{
                color: lightblue;
            }
            .footer{
                min-height: 120px;
                width: 100%;
                /*background-color: black;*/
                text-align: center;
                color: grey;
            }
            .container{
                min-height: 500px;
            }
            .normal_img{
                object-fit:cover;
                margin: 6px;
                width: 100%;
            }
        </style>
        @yield('style')
    </head>
    <body>
        <div class="blog_nav">
            <div style="">

                <div style="float: left;padding: 15px">{{$title or ""}}</div>
                {{--<div style="text-align: center;position:absolute;padding: 15px;width: 100%;">XinWen (Holly) Hu</div>--}}
                <div style="float: right;padding: 15px;font-size: 16px" onclick="show_nav(this)">
                    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                </div>
                <div style="clear: both"></div>
            </div>

            <div id="mobile_nav" style="display: none">
                <a href="{{URL::to('/')}}" class="nav_li {{$home or ''}}">Home</a>
                <div style="height: 1px;width: 100%;background-color: lightgrey"></div>
                <a href="{{URL::to('/athletics')}}" class="nav_li {{$athletics or ''}}">Athletics</a>
                <div style="height: 1px;width: 100%;background-color: lightgrey"></div>
                <a href="{{URL::to('/arts')}}"  class="nav_li {{$arts or ''}}">Arts</a>
                <div style="height: 1px;width: 100%;background-color: lightgrey"></div>
                <a href="{{URL::to('/rectory')}}" class="nav_li {{$rectory or ''}}">Life at Rectory</a>
                <div style="height: 1px;width: 100%;background-color: lightgrey"></div>
                <a href="{{URL::to('/awards')}}" class="nav_li {{$awards or ''}}">Awards</a>
                <div style="height: 1px;width: 100%;background-color: lightgrey"></div>
                <a href="{{URL::to('/community_services')}}" class="nav_li {{$community_services or ""}}">Community Services</a>
                <div style="height: 1px;width: 100%;background-color: lightgrey"></div>
                <div style="height: 30px"></div>
            </div>
        </div>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        <div class="footer">
            <div style="padding: 30px">&copy;{{date("Y")}} by XinWen (Holly) Hu.</div>
        </div>
        <script src="{{URL::to('assets/js/app.js')}}"></script>
        <script src="{{URL::to('assets/js/blueimp-gallery.min.js')}}"></script>
        <script>
            function show_nav(self){
                if($("#mobile_nav").is(":visible")){
                    $("#mobile_nav").hide();
                }
                else{
                    $("#mobile_nav").show();
                }
            }
        </script>
        @yield('script')
    </body>
</html>
