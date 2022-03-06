<x-two_column title="{{ config('app.name') }}">
    <h2 class="text-cyan-400 text-3xl mt-2 mb-4 font-questrial">User List</h2>
    <ul class="dictionaries">
        @if ($users->isEmpty())
        <x-info>
            There's no user.
        </x-info>
        @endif
    
        @foreach ($users as $user)
        <li>
            <a href="{{ url('users', $user->id) }}" class="bg-neutral-700 block px-4 py-2 border-l-4 hover:border-l-8 border-blue-600 hover:border-blue-400 text-lg w-full my-2 hover:bg-neutral-600 transition-all rounded-r-sm">
                {{ $user->name }}
            </a>
        </li>
        @endforeach
    
    </ul>
</x-two_column>