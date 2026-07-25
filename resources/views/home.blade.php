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

@include('common.header',['page'=>'This is your home page'])
{{-- To check subview exists --}}

@includeIf('common.inner')

{{-- Using Component Here --}}
<x-message-banner  msg="You Login suceessfully:" class="suceess"/>

<x-message-banner  msg="You Signup suceessfully:" class="suceess"/>

<style>
    .suceess{
       color:green;
       background-color:lightseagreen;
       display:inline-block;
       padding:3px 10px;
       margin:10px;
    }
</style>