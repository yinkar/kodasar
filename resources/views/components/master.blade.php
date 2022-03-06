@if (empty($description))
    @php ($description = env('SITE_DESCRIPTION'))
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" />
    
    <meta name="description" content="{{ $description }}" />
    <meta property="og:description" content="{{ $description }}" />

    <meta name="theme-color" content="#517699" />

    @unless (session('dark_mode'))
    {{-- Need refactor --}}
    <style>
        .bg-neutral-900 { background-color: rgb(230 230 230) !important; }
        .bg-neutral-800 { background-color: rgb(245 245 245) !important; }
        .bg-neutral-700 { background-color: rgb(229 229 229) !important; }
        .bg-neutral-600 { background-color: rgb(212 212 212) !important; }
        .bg-neutral-500 { background-color: rgb(163 163 163) !important; }
        .bg-neutral-400 { background-color: rgb(115 115 115) !important; }
        .bg-neutral-300 { background-color: rgb(82 82 82) !important; }
        .bg-neutral-200 { background-color: rgb(64 64 64) !important; }
        .bg-neutral-100 { background-color: rgb(38 38 38) !important; }
        .bg-neutral-50 { background-color: rgb(23 23 23) !important; }

        .text-neutral-900 { color: rgb(230 230 230) !important; }
        .text-neutral-800 { color: rgb(245 245 245) !important; }
        .text-neutral-700 { color: rgb(229 229 229) !important; }
        .text-neutral-600 { color: rgb(212 212 212) !important; }
        .text-neutral-500 { color: rgb(163 163 163) !important; }
        .text-neutral-400 { color: rgb(115 115 115) !important; }
        .text-neutral-300 { color: rgb(82 82 82) !important; }
        .text-neutral-200 { color: rgb(64 64 64) !important; }
        .text-neutral-100 { color: rgb(38 38 38) !important; }
        .text-neutral-50 { color: rgb(23 23 23) !important; }

        .logo {
            filter: invert(1);
        }
    </style>
    @endunless
</head>

<body class="bg-neutral-900 font-raleway">
    <x-navbar></x-navbar>

    {{ $page }}
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/hljs.js') }}" defer></script>
</body>

</html>
