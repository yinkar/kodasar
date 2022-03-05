@extends('layouts.two_column')

@section('title', sprintf('Register - %s', config('app.name')))

@section('content')
<h2 class="text-cyan-400 text-3xl mt-10 mb-4 text-center font-questrial">Register</h2>
<div class="w-96 mx-auto mb-10">
    <form action="{{ url('register') }}" method="POST">
        @csrf
        <div class="my-2">
            <label class="block w-full py-2" for="name">Name</label>
            <input class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="name" name="name" required />
        </div>
        <div class="my-2">
            <label class="block w-full py-2" for="username">Username</label>
            <input class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="username" name="username" required />
        </div>
        <div class="my-2">
            <label class="block w-full py-2" for="email">Email</label>
            <input class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="email" name="email" required />
        </div>
        <div class="my-2">
            <label class="block w-full py-2" for="password">Password</label>
            <input class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="password" id="password" name="password" required />
        </div>
        <div class="my-2">
            <div class="block w-full py-2">Gender</div>
            <div class="flex">
                <div class="mr-4">
                    <input type="radio" name="gender" id="gender-female" value="female" />
                    <label for="gender-female" class="text-sm">Female</label>
                </div>
    
                <div class="mr-4">    
                    <input type="radio" name="gender" id="gender-male" value="male" required />
                    <label for="gender-male" class="text-sm">Male</label>
                </div>
            </div>
        </div>
        <div class="my-8">
            <button class="block w-full py-2 bg-lime-700 text-white rounded-sm hover:bg-lime-600 transition-colors" type="submit">Sign up</button>
        </div>
    </form>
</div>
@stop