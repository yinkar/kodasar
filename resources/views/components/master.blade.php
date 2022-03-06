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
</head>

<body class="bg-neutral-900 font-raleway">
    <x-navbar></x-navbar>

    {{ $page }}
    <script src="{{ mix('js/hljs.js') }}" defer></script>
</body>

</html>
