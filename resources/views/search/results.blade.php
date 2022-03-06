<x-two_column title="{{ sprintf('Search Results of %s - %s', $query, config('app.name')) }}">
    @if (Str::of($query)->length() > 0)
    <h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">Search Results of "{{ $query }}"</h2>

    @if (!!count($results))
    <ul class="search-results">
        @foreach ($results as $result)
        
        <li class="py-2">
            <a class="block bg-neutral-700 hover:bg-neutral-600 p-2 w-full text-blue-400 hover:text-blue-300 transition-colors" href="{{ route('entry.show', ['dictionary' => $result->dictionary->slug, 'entry' => $result->id]) }}">
                {{ $result->command }} <span class="text-cyan-700">({{ $result->dictionary->name }})</span>
            </a>
        </li>

        @endforeach
    </ul>
    @else
    <x-warning>
        There's no search result.
    </x-warning>
    @endif
    @else
    <h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">Search</h2>
    <x-info>
        Please enter some words to search.
    </x-info>
    @endif
</x-two_column>