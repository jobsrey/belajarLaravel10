<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module Shop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Laravel Vite - CSS File --}}
    {{-- {{ module_vite('build-shop', 'Resources/assets/sass/app.scss') }} --}}

</head>

<body>
    <x-shop::navbar />
    @yield('content')

    {{-- Laravel Vite - JS File --}}
    {{-- {{ module_vite('build-shop', 'Resources/assets/js/app.js') }} --}}
</body>

</html>
