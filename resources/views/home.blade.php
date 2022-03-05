@extends('layouts.two_column')

@section('title', config('app.name'))

@section('content')
<h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">Dictionaries</h2>
<ul class="dictionaries">
    <li>
        <a href="#" class="bg-neutral-700 block px-4 py-2 border-l-4 hover:border-l-8 border-blue-600 hover:border-blue-400 text-lg w-full my-2 hover:bg-neutral-600 transition-all rounded-r-sm">
            JavaScript
        </a>
    </li>
    <li>
        <a href="#" class="bg-neutral-700 block px-4 py-2 border-l-4 hover:border-l-8 border-blue-600 hover:border-blue-400 text-lg w-full my-2 hover:bg-neutral-600 transition-all rounded-r-sm">
            PHP
        </a>
    </li>
    <li>
        <a href="#" class="bg-neutral-700 block px-4 py-2 border-l-4 hover:border-l-8 border-blue-600 hover:border-blue-400 text-lg w-full my-2 hover:bg-neutral-600 transition-all rounded-r-sm">
            Go
        </a>
    </li>
    <li>
        <a href="#" class="bg-neutral-700 block px-4 py-2 border-l-4 hover:border-l-8 border-blue-600 hover:border-blue-400 text-lg w-full my-2 hover:bg-neutral-600 transition-all rounded-r-sm">
            C
        </a>
    </li>
</ul>

<div class="my-3 links">
    <a href="#" class="text-cyan-500 hover:text-cyan-700 transition-colors">Add language</a>
</div>
@stop