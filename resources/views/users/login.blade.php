<x-two_column title="{{ sprintf('Login - %s', config('app.name')) }}">
    <h2 class="text-cyan-400 text-3xl mt-10 mb-4 text-center font-questrial">Login</h2>
    <div class="lg:w-96 mx-auto mb-10">
        <form action="{{ url('login') }}" method="POST">
            @csrf
            <div class="my-2">
                <label class="block w-full py-2" for="username">Username</label>
                <input value="{{ old('username') }}" class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="username" name="username" required />
                @error('username')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-2">
                <label class="block w-full py-2" for="password">Password</label>
                <input class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="password" id="password" name="password" required />
                @error('password')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-8">
                <button class="block w-full py-2 bg-lime-700 text-white rounded-sm hover:bg-lime-600 transition-colors" type="submit">Login</button>
            </div>
        </form>
    </div>
</x-two_column>