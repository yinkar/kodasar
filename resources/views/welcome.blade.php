<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kodasar</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
</head>

<body class="bg-neutral-900">
    @include('navbar');

    <div class="container mx-auto px-4 grid grid-cols-12 gap-3 my-2">
        <div class="col-span-9">
            <div class="block bg-neutral-800 text-neutral-100 px-4 py-2 rounded-sm border-neutral-700 border">
                <h2 class="text-cyan-400 text-3xl mt-2 mb-4">Dictionaries</h2>
                <ul class="dictionaries">
                    <li>
                        <a href="#" class="bg-neutral-700 block px-4 py-2 border-l-4 border-blue-600 hover:border-blue-400 text-lg w-full my-2 hover:bg-neutral-600">
                            JavaScript
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-neutral-700 block px-4 py-2 border-l-4 border-blue-600 hover:border-blue-400 text-lg w-full my-2 hover:bg-neutral-600">
                            PHP
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-neutral-700 block px-4 py-2 border-l-4 border-blue-600 hover:border-blue-400 text-lg w-full my-2 hover:bg-neutral-600">
                            Go
                        </a>
                    </li>
                    <li>
                        <a href="#" class="bg-neutral-700 block px-4 py-2 border-l-4 border-blue-600 hover:border-blue-400 text-lg w-full my-2 hover:bg-neutral-600">
                            C
                        </a>
                    </li>
                </ul>

                <div class="my-3 links">
                    <a href="#" class="text-cyan-500 hover:text-cyan-700 transition-colors">Add language</a>
                </div>
            </div>
        </div>
        <div class="col-span-3">
            @include('sidebar');
        </div>
        <div class="info-links">
            <ul>
                <li>
                    <a href="#"></a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>