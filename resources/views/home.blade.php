<h1>Hey,this is your home page</h1>

<h1>Welcome:{{$name}}</h1>

@if($name=="Arnab")
<h2>Hey this is:{{ $name }}</h2>
@elseif($name=="Sam")
<h2>Hey this is:{{ $name }}</h2>
@else
<h2>Other Users</h2>
@endif

{{-- Foreach Loop --}}
<div>
@foreach ($users as $user)
    <h1>The user name is:{{ $user }}</h1>
@endforeach

</div>