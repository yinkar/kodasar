<x-two_column title="{{ sprintf('%s - %s', $dictionary->name, config('app.name')) }}">
    <h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">{{ $dictionary->name }}</h2>
    <ul class="entries">
        @if (!count($dictionary->entries))
        <x-info>
            There's no entry.
        </x-info>
        @endif

        @foreach ($dictionary->entries->sortByDesc('id') as $entry)
            <li class="my-4 border border-neutral-600 rounded-sm">
                <a class="block bg-blue-500 py-2 px-4 hover:bg-blue-400 transition-colors font-bold rounded-sm" 
                    href="{{ url('dictionaries', [ $dictionary->slug, 'entries', $entry->id ]) }}"
                >{{ $entry->command }}</a>

                <div class="bg-neutral-700 p-4">
                    {{ $entry->info }}
                </div>
            </li>
        @endforeach
    </ul>

    <div class="my-3 links">
        <a href="{{ url('dictionaries', [ $dictionary->slug, 'create_entry' ]) }}" class="text-cyan-500 hover:text-cyan-700 transition-colors">Add entry</a>
    </div>
</x-two_column>