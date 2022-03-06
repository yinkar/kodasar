<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
</head>

<body class="bg-neutral-900 font-raleway">
    <x-navbar></x-navbar>

    {{ $page }}
    <script src="{{ mix('js/hljs.js') }}" defer></script>
</body>

</html>
