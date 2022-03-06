<x-two_column title="{{ sprintf('Login - %s', config('app.name')) }}">
    <h2 class="text-cyan-400 text-3xl mt-10 mb-4 text-center font-questrial">Create Dictionary</h2>
    <div class="w-96 mx-auto mb-10">
        <form action="{{ url('create_dictionary') }}" method="POST">
            @csrf
            <div class="my-2">
                <label class="block w-full py-2" for="name">Language name</label>
                <input value="{{ old('name') }}" class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="name" name="name" required />
                @error('name')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-8">
                <button class="block w-full py-2 bg-lime-700 text-white rounded-sm hover:bg-lime-600 transition-colors" type="submit">Create</button>
            </div>
        </form>
    </div>
</x-two_column>