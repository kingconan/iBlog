<!DOCTYPE html>
<html>
    <head>
        <title>iBLOG</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{URL::to('assets/css/app.css')}}" />
        <link rel="stylesheet" href="{{URL::to('assets/css/blueimp-gallery.min.css')}}" />
        <link href="https://fonts.googleapis.com/css?family=Courgette|Satisfy" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <style>
            .nav_li{
                padding: 30px;
                display: block;
                font-size: 14px;
                color: #3c3c3c;
                cursor: pointer;
                text-decoration:none;
                float: left;
            }
            .nav_li:hover{
                color: lightblue;
                text-decoration:none;
            }
            .nav_focus{
                color: lightblue;
            }
            .blog_nav{
                display: table;
                margin: 0 auto;
            }
            .footer{
                min-height: 100px;
                width: 100%;
                /*background-color: black;*/
                text-align: center;
                margin-top: 30px;
                color: grey;
            }
            .container{
                min-height: 500px;
                width: 80%;
                margin-left: auto;
                margin-right: auto;
            }
            .normal_img{
                object-fit:cover ;width: 200px;height: 200px;
                margin: 6px;
            }
            body{
                font-family: 'Roboto', sans-serif;
            }
        </style>
        @yield('style')
    </head>
    <body>
        <div class="blog_nav">
            <div>
                <a href="{{URL::to('/')}}" class="nav_li {{$home or ''}}">Home</a>
                <a href="{{URL::to('/athletics')}}" class="nav_li {{$athletics or ''}}">Athletics</a>
                <a href="{{URL::to('/arts')}}"  class="nav_li {{$arts or ''}}">Art</a>
                <a href="{{URL::to('/rectory')}}" class="nav_li {{$rectory or ''}}">Life at Rectory</a>
                <a href="{{URL::to('/awards')}}" class="nav_li {{$awards or ''}}">Awards</a>
                <a href="{{URL::to('/community_services')}}" class="nav_li {{$community_services or ""}}">Community Services</a>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
        <div class="footer">
            <div style="padding: 30px">&copy;{{date("Y")}} by XinWen (Holly) Hu</div>
        </div>
        <script src="{{URL::to('assets/js/app.js')}}"></script>
        <script src="{{URL::to('assets/js/blueimp-gallery.min.js')}}"></script>
        @yield('script')
    </body>
</html>
