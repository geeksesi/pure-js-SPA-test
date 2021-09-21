@extends('layout')

@section('body')
    
<div>
    <livewire:counter /> 

</br>
</br>

<ul>
    @foreach ($links as $link)
    <li><a href="{{route($link['link'])}}">{{$link["name"]}}</a></li>
    @endforeach
</ul>
</div>

@endsection