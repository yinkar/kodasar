<x-two_column title="{{ sprintf('%s - %s', $entry->command, config('app.name')) }}">
    <h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">{{ $entry->command }}</h2>

    <section>
        <p class="my-2">
            {{ $entry->info }}
        </p>
        <p class="my-2">
            <strong>Language:</strong> <a class="font-bold text-blue-400 hover:text-blue-300 transition-colors" href="{{ url('dictionary', $entry->dictionary->slug) }}">{{ $entry->dictionary->name }}</a>
        </p>

        @if (!!$entry->library)
        <p>
            <strong>Required library:</strong> {{ $entry->library }}
        </p>
        @endif

        <p class="mt-5 mb-2">
            <h3 class="my-2"><strong>Example Code</strong></h3>

            <pre class="code-wrapper"><code class="code">{{
                    \html_entity_decode(trim($entry->example)) 
                }}</code></pre>
        </p>

        @if (!!$entry->extra)
        <p class="my-2">
            {{ $entry->extra }}
        </p>
        @endif

        <p class="my-2">
            {{ $entry->created_at->toDateTimeString() }}
        </p>
        
        <p class="my-2">
            <strong>From:</strong> <a class="font-bold text-blue-400 hover:text-blue-300 transition-colors" href="#">{{ $entry->user->username }}</a>
        </p>
    </section>
</x-two_column>