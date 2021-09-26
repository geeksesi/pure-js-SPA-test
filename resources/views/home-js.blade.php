@extends('layout')

@section('body')
    
<div data-xhr="main">

<ul x-data x-show="$store.api.ul_url_show">
    <li><h1>Hellloo</h1></li>
    <template x-for="link in $store.api.ul_url_data" :key="link.id">
        <li><a x-bind:href="link.link" x-text="link.name"></a></li>
    </template>
</ul>
</div>

@endsection