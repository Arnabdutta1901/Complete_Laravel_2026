{{-- <h1>This is your about page</h1>
<h1>Welcome:{{$name}}</h1> --}}

{{-- Anchor Route ---}}
<a href="/">Welcome</a>
<a href="/home">Home</a>

{{-- Previous Url --}}
Previous Url:{{ URL::previous() }}
<a href="{{ URL::to('about',['arnab'])}}">About Arnab</a>