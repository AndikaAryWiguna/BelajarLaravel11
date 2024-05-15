<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Home</title>
    {{-- Tailwind CSS Complementary --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    {{-- Alpine JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="min-h-full">
        {{-- Navbar dari component Navbar --}}
        <x-navbar></x-navbar>

        {{-- Header dari component Header --}}
        {{-- Isi Component ($title) Pada Component Header akan menggantikan variable {{ $slot }} di component header.blade.php --}}
        {{-- Variable title ini dimabil bukan dari routes tapi dari masing-masing view yang diisi dengan (<x-slot:title>{{ $title }}</x-slot:title>) --}}
        <x-header>{{ $title }}</x-header>

        {{-- Main --}}
        {{-- Variable {{ $slot }} akan diisi pada apapun yang ada dalam isi component ketika digunakan pada view --}}
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{-- Slot ini akan diisi oleh konten yang ada pada tampilan ketika dipanggil (x-templating) --}}
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
