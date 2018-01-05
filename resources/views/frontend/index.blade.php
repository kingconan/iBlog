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
        <div style="height: 30px"></div>
        <div style="text-align: center;font-size: 24px;font-weight: bolder;margin-bottom: 15px">About Me</div>
        <p style="line-height: 24px">
            I am Holly Hu from Shanghai, China. Before coming to the U.S. two years ago, I attended the YK Pao School in Shanghai as a boarding student. I am currently a ninth grader at Rectory School. After attending a summer program in Lenox, MA., I grew to like the school environment in America. I convinced my parents that I wanted to study in the US and, with their support, I came to Rectory as an eighth grader. The biggest differences between the boarding schools in China and in the United States is that there are more opportunities in the US for sports, clubs, and challenging academics. I love my life at Rectory School for the past two years. My friends are from all over the world and as a result, I have been exposed to different cultures. I enjoy playing volleyball, basketball and softball. Being the captain of the varsity volleyball team gave me the opportunity to be a leader of our team this year.  I was more than thrilled to receive the MVP award after our successful season. I am proud to be a school ambassador because I get to give tours and share my experiences to prospective students. In additions, being a proctor, this year has allowed me to assist the younger students and plan dorm activities with our dorm parents. I am looking forward to my new journey at a secondary school, where I can further develop both academically and socially.
        </p>
    </div>
@endsection
