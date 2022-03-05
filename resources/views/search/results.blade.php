@extends('layouts.two_column')

@section('title', sprintf('Search Results of %s - %s', $query, config('app.name')))

@section('content')

@if (Str::of($query)->length() > 0)
<h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">Search Results of "{{ $query }}"</h2>
<ul class="search-results">
    
</ul>
@else
<h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">Search</h2>
<div class="bg-gray-300 rounded-lg py-5 px-6 my-3 text-base text-gray-800 inline-flex items-center w-full" role="alert">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
    </svg>

    Please enter some words to search.
</div>
@endif
@stop