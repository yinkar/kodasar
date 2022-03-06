@php
    $auth = false;  
    $username = 'Yinkar';
@endphp

<div class="block bg-neutral-800 text-neutral-100 rounded-sm border-neutral-700 border shadow px-4 py-2">
    @if ($auth)
    <ul>
        <li>
            <a href="#" class="profile-link bg-green-600 block px-4 py-2 hover:bg-green-500 transition-colors my-1 rounded-sm">
                {{ $username }}
            </a>
        </li>
        <li>
            <a href="#" class="profile-link bg-blue-500 block px-4 py-2 hover:bg-blue-400 transition-colors my-1 rounded-sm">
                Messages
            </a>
        </li>
        <li>
            <a href="#" class="profile-link bg-blue-500 block px-4 py-2 hover:bg-blue-400 transition-colors my-1 rounded-sm">
                User
            </a>
        </li>
        <li>
            <a href="#" class="profile-link bg-blue-500 block px-4 py-2 hover:bg-blue-400 transition-colors my-1 rounded-sm">
                Log out
            </a>
        </li>
        <li>
            <a href="#" class="profile-link bg-neutral-300 text-neutral-700 block px-4 py-2 hover:bg-neutral-100 transition-colors my-1 rounded-sm">
                <i class="fa-solid fa-sun"></i> Light mode
            </a>
        </li>
    </ul>
    @else
    <ul>
        <li>
            <a href="/login" class="profile-link bg-blue-500 block px-4 py-2 hover:bg-blue-400 transition-colors my-1 rounded-sm">
                Login
            </a>
        </li>
        <li>
            <a href="/register" class="profile-link bg-blue-500 block px-4 py-2 hover:bg-blue-400 transition-colors my-1 rounded-sm">
                Register
            </a>
        </li>
        <li>
            <a href="#" class="profile-link bg-neutral-300 text-neutral-700 block px-4 py-2 hover:bg-neutral-100 transition-colors my-1 rounded-sm">
                <i class="fa-solid fa-sun"></i> Light mode
            </a>
        </li>
    </ul>
    @endif

</div>

<div class="info-links my-2">
    <ul class="flex justify-end">
        <li>
            <a href="{{ url('help') }}" class="text-neutral-500 hover:text-neutral-400 transition-colors mx-2 text-sm">Help</a>
        </li>
        <li>
            <a href="{{ url('about') }}" class="text-neutral-500 hover:text-neutral-400 transition-colors mx-2 text-sm">About</a>
        </li>
    </ul>
</div>