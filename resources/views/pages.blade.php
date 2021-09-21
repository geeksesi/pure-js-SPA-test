@extends('layout')

@section('body')
    
<div>
    <div x-data="{ show: false }">
        <button @click="show = !show">Show</button>
        <h1 x-show="show">Hello Alpine.js</h1>
    </div>
    <br>
    <br>
    <ul>
        <li><a href="{{route("home")}}">Home</a></li>
        @foreach ($links as $link)
        <li><a href="{{route($link['link'])}}">{{$link["name"]}}</a></li>
        @endforeach
    </ul>
</div>

@endsection