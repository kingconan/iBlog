@extends($is_mobile ? "mobile.layout.nav_base" :"frontend.layout.nav_base")
@section('style')
    <style>
        .year{
            clear: both;
        }
    </style>
@endsection
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
        var base_url = '{{URL::to("assets/images")}}' + "/award/"
        var urls = [
            base_url+"WechatIMG58.jpeg",
            base_url+"WechatIMG60.jpeg",
        ]
        var root = $("#gallery_part");
        for(var i= 0,len = urls.length;i<len;i++){
            if(urls[i].indexOf("mp4", urls[i].length - "mp4".length) !== -1
            ){
                var img = '<a href="' + urls[i] + '" type="video/mp4"><img class="normal_img" src="'+urls[i]+'"></a>';
                root.append(img);
            }
            else if(urls[i].indexOf("mov", urls[i].length - "mov".length) !== -1
            ){
                var img = '<a href="' + urls[i] + '" type="video/mp4"><img class="normal_img" src="'+urls[i]+'"></a>';
                root.append(img);
            }
            else{
                var img = '<a href="' + urls[i] + '"><img class="normal_img" src="'+urls[i]+'"></a>';
                root.append(img);
            }

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
