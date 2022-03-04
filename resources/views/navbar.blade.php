
<nav class="navbar w-fill h-14 bg-neutral-800 shadow-inner border-b-4 border-blue-600 flex items-center justify-between">
    <div class="navbar-left flex">
        <div class="logo mx-4">
            <a href="{{ URL::to('/') }}" title="{{ config('app.name') }}">
                <img src="{{ url('/images/logo.png') }}" alt="{{ config('app.name') }}" />
            </a>
        </div>

        <div class="navbar-menu">
            <ul class="flex">
                <li class="mx-2">
                    <a href="#" class="text-neutral-100 hover:text-neutral-50 transition-colors">Dictionaries</a>
                </li>
                <li class="mx-2">
                    <a href="#" class="text-neutral-500 hover:text-neutral-400 transition-colors">Hello Worlds</a>
                </li>
                <li class="mx-2">
                    <a href="#" class="text-neutral-500 hover:text-neutral-400 transition-colors">Example Tutorials</a>
                </li>
                <li class="mx-2">
                    <a href="#" class="text-neutral-500 hover:text-neutral-400 transition-colors">Encyclopedia</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="navbar-right flex">
        <div class="navbar-icons">
            <a href="#" class="text-neutral-500 hover:text-neutral-400 transition-colors">
                <i class="fa-solid fa-square-pen text-3xl"></i>
            </a>
        </div>

        <div class="search-bar flex mx-4 overflow-hidden rounded-sm">
            <div class="input-group relative flex flex-nowrap rounded">
                <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-neutral-50 bg-neutral-700 bg-clip-padding border-0 transition ease-in-out m-0 focus:text-neutral-100 focus:bg-neutral-600 focus:outline-none placeholder-neutral-500" placeholder="Search" spellcheck="false" />

                <button class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-neutral-50 bg-neutral-600 text-center whitespace-nowrap hover:bg-neutral-500 transition-colors">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>