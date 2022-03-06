<x-two_column title="{{ sprintf('Login - %s', config('app.name')) }}">
    <h2 class="text-cyan-400 text-3xl mt-10 mb-4 text-center font-questrial">Create Entry</h2>
    <div class="w-96 mx-auto mb-10">
        <form action="{{ url('create_dictionary') }}" method="POST">
            @csrf
            <div class="my-2">
                <strong>Language:</strong> <a class="font-bold text-blue-400 hover:text-blue-300 transition-colors" href="{{ url('dictionaries', $dictionary->slug) }}">{{ $dictionary->name }}</a>
            </div>
            <div class="my-2">
                <label class="block w-full py-2" for="command"><strong>Function or command*</strong></label>
                <input value="{{ old('command') }}" class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="command" name="command" required />
                @error('command')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block w-full py-2" for="info"><strong>Short info*</strong></label>
                <input value="{{ old('info') }}" class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="info" name="info" required />
                @error('info')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block w-full py-2" for="library"><strong>Library</strong></label>
                <input value="{{ old('library') }}" class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="library" name="library" required />
                @error('library')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block w-full py-2" for="example"><strong>Example</strong></label>
                <textarea class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="example" name="example" required>{{ old('example') }}</textarea>
                @error('example')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block w-full py-2" for="extra"><strong>Extra</strong></label>
                <textarea class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="extra" name="extra" required>{{ old('extra') }}</textarea>
                @error('extra')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-8">
                <button class="block w-full py-2 bg-lime-700 text-white rounded-sm hover:bg-lime-600 transition-colors" type="submit">Create</button>
            </div>
        </form>
    </div>
</x-two_column>