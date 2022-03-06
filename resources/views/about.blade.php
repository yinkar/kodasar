@extends('layouts.two_column')

@section('title', config('app.name'))

@section('content')
<h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">About {{ config('app.name') }}</h2>

<p class="mb-8">
    About page
</p>
@stop
