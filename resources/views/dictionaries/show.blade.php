@extends('layouts.two_column')

@section('title', config('app.name'))

@section('content')
<h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">{{ $dictionary->name }}</h2>
<ul class="entries">
    @foreach ($dictionary->entries as $entry)
        <li class="my-4 border border-neutral-600 rounded-sm">
            <a class="block bg-blue-500 py-2 px-4 hover:bg-blue-400 transition-colors font-bold rounded-sm" 
                href="{{ url('dictionary', [ $dictionary->slug, 'entry', $entry->id ]) }}"
            >{{ $entry->command }}</a>

            <div class="bg-neutral-700 p-4">
                {{ $entry->info }}
            </div>
        </li>
    @endforeach
</ul>

<div class="my-3 links">
    <a href="#" class="text-cyan-500 hover:text-cyan-700 transition-colors">Add entry</a>
</div>
@stop
