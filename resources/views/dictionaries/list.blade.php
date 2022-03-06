<x-two_column title="{{ config('app.name') }}">
    <h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">Dictionaries</h2>
    <ul class="dictionaries">
        @if ($dictionaries->isEmpty())
        <x-info>
            There's no dictionary.
        </x-info>
        @endif
    
        @foreach ($dictionaries as $dictionary)
        <li>
            <a href="{{ url('dictionaries', $dictionary->slug) }}" class="bg-neutral-700 block px-4 py-2 border-l-4 hover:border-l-8 border-blue-600 hover:border-blue-400 text-lg w-full my-2 hover:bg-neutral-600 transition-all rounded-r-sm">
                {{ $dictionary->name }}
            </a>
        </li>
        @endforeach
    
    </ul>
    
    <div class="my-3 links">
        @auth
        <a href="{{ url('create_dictionary') }}" class="text-cyan-500 hover:text-cyan-700 transition-colors">Add language</a>
        @endauth
    </div>
</x-two_column>