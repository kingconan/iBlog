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
        var base_url = '{{URL::to("assets/images")}}' + "/life-at-rectory/";
        var urls = [
            base_url+"WechatIMG30.jpeg",
            base_url+"WechatIMG31.jpeg",
            base_url+"WechatIMG32.jpeg",
            base_url+"WechatIMG33.jpeg",
            base_url+"WechatIMG34.jpeg",
            base_url+"WechatIMG35.jpeg",
            base_url+"WechatIMG36.jpeg",
            base_url+"WechatIMG37.jpeg",
            base_url+"WechatIMG39.jpeg",
            base_url+"WechatIMG40.jpeg",
            base_url+"WechatIMG41.jpeg",
            base_url+"WechatIMG42.jpeg",
            base_url+"WechatIMG43.jpeg",
            base_url+"WechatIMG44.jpeg",
            base_url+"WechatIMG45.jpeg",
            base_url+"WechatIMG46.jpeg",
            base_url+"WechatIMG47.jpeg",
            base_url+"WechatIMG1767.jpeg",
            base_url+"WechatIMG1768.jpeg",
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
