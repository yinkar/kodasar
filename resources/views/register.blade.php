@extends('layouts.two_column')

@section('title', config('app.name'))

@section('content')
<h2 class="text-cyan-400 text-3xl mt-10 mb-4 text-center font-questrial">Register</h2>
<div class="w-96 mx-auto mb-10">
    <div class="my-2">
        <label class="block w-full py-2" for="name">Name</label>
        <input class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="name" name="name" />
    </div>
    <div class="my-2">
        <label class="block w-full py-2" for="username">Username</label>
        <input class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="username" name="username" />
    </div>
    <div class="my-2">
        <label class="block w-full py-2" for="email">Email</label>
        <input class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="text" id="email" name="email" />
    </div>
    <div class="my-2">
        <label class="block w-full py-2" for="password">Password</label>
        <input class="block w-full p-2 bg-neutral-600 rounded-sm focus:outline-none focus:bg-neutral-500" type="password" id="password" name="password" />
    </div>
    <div class="my-2">
        <div class="block w-full py-2">Gender</div>
        <input type="radio" name="gender" id="gender-female" value="female" />
        <label for="gender-female">Female</label>

        <input type="radio" name="gender" id="gender-male" value="male" />
        <label for="gender-male">Male</label>
    </div>
    <div class="my-8">
        <button class="block w-full py-2 bg-lime-700 text-white rounded-sm hover:bg-lime-600 transition-colors" type="submit">Sign up</button>
    </div>
</div>
@stop