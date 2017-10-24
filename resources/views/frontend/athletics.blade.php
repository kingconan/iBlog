@extends("frontend.layout.nav_base")
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
            base_url+"athletics1.png",
            base_url+"athletics2.png",
            base_url+"athletics3.png",
            base_url+"athletics4.png",
            base_url+"athletics5.png",
            base_url+"athletics6.png",
            base_url+"athletics7.JPG",
            base_url+"athletics8.jpg",
            base_url+"athletics9.jpg"
        ]
        var root = $("#gallery_part");
        for(var i= 0,len = urls.length;i<len;i++){
            var img = '<a href="' + urls[i] + '"><img class="normal_img" src="'+urls[i]+'"></a>';
            root.append(img);
        }
//        blueimp.Gallery(
//                document.getElementById('gallery_part').getElementsByTagName('a'),
//                {
//                    container: '#blueimp-gallery-carousel',
//                    carousel: true
//                }
//        );
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
