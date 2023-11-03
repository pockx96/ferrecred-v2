<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body>
    @extends('adminlte::page')

    @section('content')
    @livewire('products-sales.products-sale-main')
    @endsection
</body>

</html>