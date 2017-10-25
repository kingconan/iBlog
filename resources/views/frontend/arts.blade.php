@extends($is_mobile ? "mobile.layout.nav_base" :"frontend.layout.nav_base")
@section('content')
    <div>
        <div id="gallery_part">

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
            base_url+"art1.JPG",
            base_url+"art2.JPG",
            base_url+"art3.JPG",
            base_url+"art4.JPG",
            base_url+"art5.jpg",
            base_url+"art6.JPG",
            base_url+"art7.JPG",
            base_url+"art8.JPG"
        ]
        var root = $("#gallery_part");
        for(var i= 0,len = urls.length;i<len;i++){
            var img = '<a href="' + urls[i] + '"><img class="normal_img" src="'+urls[i]+'"></a>';
            root.append(img);
        }
        document.getElementById('gallery_part').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = {index: link, event: event},
                    links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>
@endsection
