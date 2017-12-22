@extends($is_mobile ? "mobile.layout.nav_base" :"frontend.layout.nav_base")
@section('content')
    <div style="padding:6px 30px;">
        <div style="position: relative">
            <img src="{{URL::to("assets/images/bg3.jpg")}}" style="position: relative;width: 100%" />
            <div style="position: absolute;right: 100px;bottom: 140px;color: white;font-size: 36px;
            font-family: 'Satisfy', cursive;
            ">
                XinWen (Holly) Hu</div>
        </div>
        <div style="height: 100px"></div>
        <div style="text-align: center;font-size: 24px;font-weight: bolder;margin-bottom: 15px">About Me</div>
        <p style="line-height: 24px">
            I am Holly Hu from Shanghai, China. Before coming to the US two years ago, I attended the YK Pao School in Shanghai as a boarding student since sixth grade. I am currently a ninth grader at Rectory School. After being at the summer program in Lenox, MA, I like the surrounding at America. I convinced my parent that I want to study in the US, with their support I came to Rectory as an eighth grader. The biggest differences between the boarding school in China and in United States is there is more opportunities in US for sports, clubs, and challenging academics. I love being at Rectory School for the past two years. My friends are from different countries, and I have been exposed to different cultures. I love to play volleyball, basketball and softball. I also enjoy being an ambassador to give tours to prospective students. Being a proctor this year allows me to assist the younger students and share my experiences at Rectory. I am looking forward to my new journey at secondary school, to further develop my academics
        </p>
    </div>
@endsection
