@extends($is_mobile ? "mobile.layout.nav_base" :"frontend.layout.nav_base")
@section('style')
    <style>
        .s_title{
            font-weight: bold;
            font-size: 18px;
            padding: 15px 0;
            border-bottom: 1px solid lightgrey;
            margin-bottom:15px;
        }
    </style>
@endsection
@section('content')
    <div>
        <div id="drawing-paint">
            <div class="s_title">Drawing & Painting</div>
            <div id="g1">

            </div>
        </div>
        <div style="height: 20px;width: 20px"></div>
        <div id="photo">
            <div class="s_title">Photography</div>
            <div id="g2">

            </div>
        </div>
    </div>

    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev" style="display: block;">‹</a>
        <a class="next" style="display: block;">›</a>
        <a class="close" style="display: block;">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
@endsection
@section('script')
    <script>
        var base_url = '{{URL::to("assets/images")}}' + "/"
        var urls = [
            [base_url+"art3.JPG",
                base_url+"art4.JPG",
                base_url+"art8.JPG",
                base_url+"art9.jpeg"],
                [base_url+"art1.JPG",
                    base_url+"art2.JPG",

                    base_url+"art5.jpg",
                    base_url+"art6.JPG",
                    base_url+"art7.JPG",],

        ]
        var roots = ["#g1","#g2"];
        for(var j= 0,jLen = roots.length;j<jLen;j++){
            var root = $(roots[j]);
            for(var i= 0,len = urls[j].length;i<len;i++){
                var img = '<a href="' + urls[j][i] + '"><img class="normal_img" src="'+urls[j][i]+'"></a>';
                root.append(img);
            }
        }

        document.getElementById('g1').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = {index: link, event: event},
                    links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
        document.getElementById('g2').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = {index: link, event: event},
                    links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>
@endsection
