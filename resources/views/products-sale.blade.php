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

    <div class="flex w-full h-screen  bg-slate-300">
        @livewire('app-navigation')
        <section class="flex flex-col w-full items-center justify-between">
            @include('sections.product-sale.header-sale')
            <div class="flex h-4/5 w-full  justify-between">
                <section class=" flex flex-col h-full w-full justify-around items-center ">
                    <div class="flex w-full h-1/4 items-end justify-between px-8 py-6">
                        <div class="flex w-1/2">
                        </div>
                        <x-customer-info></x-customer-info>
                        <x-total-sale-box></x-total-sale-box>
                    </div>
                    @livewire('products-sales.table-sale')
                </section>
                @include('sections.product-sale.side-bar')

            </div>

            @livewire('products-sales.footer-sale')

        </section>


    </div>

    @livewireScripts
</body>

</html>