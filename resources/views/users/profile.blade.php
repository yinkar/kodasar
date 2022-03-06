<x-two_column title="{{ sprintf('%s - %s', $user->username, config('app.name')) }}">
    <h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">{{ $user->username }}</h2>

    <section>
        <p class="my-2">
            <strong>Name:</strong> {{ $user->name }}
        </p>
    </section>
</x-two_column>