@extends($is_mobile ? "mobile.layout.nav_base" :"frontend.layout.nav_base")
@section('style')
    <style>
        .year{
            clear: both;

        }
        .left_year{
            font-weight: bolder;
            font-size: 16px;
            text-align: center;
            margin-top: -5px;
        }
    </style>
@endsection
@section('content')
    <div>
    @if($is_mobile)
            <div id="mobile">
                <div class="year">
                    <div style="float: left;width: 100%;padding-left: 60px;position: relative">
                        <div id="g2017" style="border-left: 1px solid lightgrey;padding: 15px">

                        </div>
                        <div style="width: 11px;height: 11px;background-color: lightgrey;position: absolute;left:55px;top: 0px;border-radius: 10px"></div>
                    </div>
                    <div style="float: left;width: 60px;margin-left: -100%">
                        <div class="left_year">2017</div>
                        {{--<div>description</div>--}}
                    </div>
                </div>
                <div class="year">
                    <div style="float: left;width: 100%;padding-left: 60px;position: relative">
                        <div id="g2016" style="border-left: 1px solid lightgrey;padding:15px">

                        </div>
                        <div style="width: 11px;height: 11px;background-color: lightgrey;position: absolute;left:55px;top: 0;border-radius: 10px"></div>
                    </div>
                    <div style="float: left;width: 60px;margin-left: -100%;">
                        <div class="left_year">2016</div>
                        {{--<div>description</div>--}}
                    </div>
                </div>
                <div class="year">
                    <div style="float: left;width: 100%;padding-left: 60px;position: relative">
                        <div id="g2015" style="border-left: 1px solid lightgrey;padding:15px">

                        </div>
                        <div style="width: 11px;height: 11px;background-color: lightgrey;position: absolute;left:55px;top: 0;border-radius: 10px"></div>
                    </div>
                    <div style="float: left;width: 60px;margin-left: -100%">
                        <div class="left_year">2015</div>
                        {{--<div>description</div>--}}
                    </div>
                </div>
                <div class="year">
                    <div style="float: left;width: 100%;padding-left: 60px;position: relative">
                        <div style="width: 11px;height: 2px;background-color: lightgrey;position: absolute;left:55px;top: 0;"></div>
                    </div>
                </div>
            </div></div>
    @else
        <div>
            <div class="year">
                <div style="float: left;width: 100%;padding-left: 130px;position: relative">
                    <div id="g2017" style="border-left: 1px solid lightgrey;padding: 15px">

                    </div>
                    <div style="width: 11px;height: 11px;background-color: lightgrey;position: absolute;left:125px;top: 0px;border-radius: 10px"></div>
                </div>
                <div style="float: left;width: 120px;margin-left: -100%">
                    <div class="left_year">2017</div>
                    {{--<div>description</div>--}}
                </div>
            </div>
            <div class="year">
                <div style="float: left;width: 100%;padding-left: 130px;position: relative">
                    <div id="g2016" style="border-left: 1px solid lightgrey;padding:15px">

                    </div>
                    <div style="width: 11px;height: 11px;background-color: lightgrey;position: absolute;left:125px;top: 0;border-radius: 10px"></div>
                </div>
                <div style="float: left;width: 120px;margin-left: -100%;">
                    <div class="left_year">2016</div>
                    {{--<div>description</div>--}}
                </div>
            </div>
            <div class="year">
                <div style="float: left;width: 100%;padding-left: 130px;position: relative">
                    <div id="g2015" style="border-left: 1px solid lightgrey;padding:15px">

                    </div>
                    <div style="width: 11px;height: 11px;background-color: lightgrey;position: absolute;left:125px;top: 0;border-radius: 10px"></div>
                </div>
                <div style="float: left;width: 120px;margin-left: -100%">
                    <div class="left_year">2015</div>
                    {{--<div>description</div>--}}
                </div>
            </div>
        <div class="year">
            <div style="float: left;width: 100%;padding-left: 130px;position: relative">
                <div style="width: 11px;height: 2px;background-color: lightgrey;position: absolute;left:125px;top: 0;"></div>
            </div>
        </div>
    </div></div>
    @endif
    <div style="clear: both"></div>
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
        var base_url = '{{URL::to("assets/images")}}' + "/athletics/"
        var urls = [
                [
            base_url+"athletics11.jpeg",//2017
            base_url+"athletics1.png",
            base_url+"athletics2.png",
            base_url+"WechatIMG48.jpeg",
            base_url+"WechatIMG61.jpeg",
            base_url+"WechatIMG62.jpeg",
            base_url+"m1.mp4",
            base_url+"m2.mp4",],
                [

            base_url+"athletics3.png",//2016
            base_url+"athletics4.png",
            base_url+"athletics5.png",
            base_url+"athletics6.png",
            base_url+"athletics8.jpg",
            base_url+"athletics9.jpg",],
            [
            base_url+"athletics7.JPG",//2015
            base_url+"athletics13.jpeg",
            base_url+"athletics14.jpeg",
            base_url+"athletics15.jpeg",]

        ]
        var roots = ["#g2017","#g2016","#g2015"];
        for(var j= 0,jLen = roots.length;j<jLen;j++){
            var root = $(roots[j]);
            for(var i= 0,len = urls[j].length;i<len;i++){
                if(urls[j][i].indexOf("mp4", urls[j][i].length - "mp4".length) !== -1){
                    var thumbnail = urls[j][i].substring(0, (urls[j][i].length - 3)) + "png";
                    console.log(thumbnail);
                    var img = '<a style="position: relative;display: inline-block" href="' + urls[j][i] + '" type="video/mp4">' +
                            '<img class="normal_img" src="'+thumbnail+'" />' +
                            '<span><i class="fa fa-play" aria-hidden="true" ' +
                            'style="font-size: 20px;position: absolute;left: 50%;top: 50%;margin-left:-7px;margin-top: -10px;color: white" /></span>' +
                            '</a>';
                    root.append(img);
                }
                else{
                    var img = '<a style="position: relative" href="' + urls[j][i] + '"><img class="normal_img" src="'+urls[j][i]+'" />' +
                            '</a>';
                    root.append(img);
                }
            }
        }
        document.getElementById('g2017').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = {index: link, event: event},
                    links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
        document.getElementById('g2016').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = {index: link, event: event},
                    links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
        document.getElementById('g2015').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = {index: link, event: event},
                    links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    </script>
@endsection
