@extends($is_mobile ? "mobile.layout.nav_base" :"frontend.layout.nav_base")
@section('style')
    <link rel="stylesheet" href="{{URL::to('assets/css/jquery.bxslider.min.css')}}" />
    <style type="text/css">
        .bx-wrapper {
            margin-bottom: 30px;
        }
        .bx-wrapper img {
            width: 100%;
        }
        #bx-pager {
            text-align: center;
        }
        #bx-pager a{
            display: inline-block;
            position: relative;
        }
        #bx-pager a:after{
            content: "";
            position: absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,.2);
        }
        #bx-pager a.active:after, #bx-pager a:hover:after{
            content: none;
        }
        #bx-pager img {
            width: 60px;
        }
    </style>
@endsection
@section('content')
    <div>
        <div id="gallery_part">

        </div>
    </div>

@endsection
@section('script')
    <script src="{{URL::to('assets/js/jquery.bxslider.min.js')}}"></script>
    <script>
        var base_url = '{{URL::to("assets/images")}}' + "/"
        var urls = [
            base_url+"athletics1.png",
            base_url+"athletics2.png",
            base_url+"athletics3.png",
            base_url+"athletics4.png",
            base_url+"athletics5.png",
            base_url+"athletics6.png",
            base_url+"athletics7.JPG",
            base_url+"athletics8.jpg",
            base_url+"athletics9.jpg",
            base_url+"athletics10.jpeg",
        ]
        $( document ).ready(function() {
            var li_res = "";
            var box_res = "";
            for(var i= 0,len = urls.length;i<len;i++){
                li_res = li_res + '<li><img  src="'+urls[i]+'" /></li>';
                box_res = box_res + '<a data-slide-index="'+i+'" href=""><img src="'+urls[i]+'" /></a>';
            }
            var res = '<ul class="bxslider">'+li_res+'"</ul>"' + '<div id="bx-pager">'+box_res+'</div>';
            $("#gallery_part").append(res);
            var w = $("body").width();
            var widthNum = parseInt(w/2);
            if (widthNum < 760) {
                widthNum = 760;
            }
            var heightNum = widthNum * 506/760;
            $('.bxslider img').each(function(i, n){
                $(n).parent().css("height", "400px");
                $(n).parent().css("object-fit", "cover");
//                $(n).parent().css("width", (widthNum * ($(n).height/heightNum) + "px"));
            });

            $('.bxslider').bxSlider({
                slideWidth: widthNum,
                slideHeight: heightNum,
                minSlides:1,
                maxSlides:5,
                moveSlides:1,
                slideMargin:5,
                pagerCustom: '#bx-pager'
            });
        });
    </script>
@endsection
