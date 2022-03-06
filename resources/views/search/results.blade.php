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
    <div class="bg-blue-100 rounded-lg py-5 px-6 mb-3 text-base text-blue-700 inline-flex items-center w-full" role="alert">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
        </svg>
        There's no search result.
    </div>
    @endif
    @else
    <h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">Search</h2>
    <div class="bg-gray-300 rounded-lg py-5 px-6 my-3 text-base text-gray-800 inline-flex items-center w-full" role="alert">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
        </svg>

        Please enter some words to search.
    </div>
    @endif
</x-two_column>