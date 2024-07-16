<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>

<body>
    <x-header></x-header>

    @yield('content')

    @livewireScripts
</body>

</html>
