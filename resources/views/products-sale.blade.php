<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body>
    @livewire('products-sales.products-sale-main')
    @livewireScripts
</body>

</html>