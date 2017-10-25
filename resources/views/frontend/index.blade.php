@extends($is_mobile ? "mobile.layout.nav_base" :"frontend.layout.nav_base")
@section('content')
    <div class="jumbotron">
        <h1>{{$is_mobile}}</h1>
        <h1>Holly</h1>
        <p>This is a simple blog of Holly Hu</p>
    </div>
@endsection
