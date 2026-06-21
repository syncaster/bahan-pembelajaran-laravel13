<!DOCTYPE html>
<html class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <title>Blog</title>
</head>

<body class="h-full">
    <div class="min-h-full">

        <x-navbar></x-navbar>
        <x-header>{{ $judul }}</x-header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p>{{ $slot }}</p>
            </div>
        </main>
    </div>


    {{-- <a href="{{ url('/home') }}">Home</a>
    <a href="{{ url('/blog') }}">Blog</a>
    <a href="{{ url('/about') }}">About</a>

    <h1 class="text-3xl font-bold underline">
        Ini adalah halaman home dengan css dari Tailwind
    </h1> --}}
</body>

</html>
