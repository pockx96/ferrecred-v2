<div class="flex w-full h-screen  bg-slate-300 ">
    @livewire('app-navigation')
    <section class="flex flex-col w-full items-center justify-between ">
        <header class=" flex flex-col w-full h-24 items-around justify-center relative">
            <div class="flex items-center">

                @include('sections.product-sale.option-sale')

                @livewire('products-sales.search-bar')

                <div class="flex justify-end px-4 w-1/12">
                    <div class="rounded-full bg-blue-500 h-12 w-12"></div>
                </div>
            </div>
            <svg class="absolute bottom-0 " width="100%" height="2">
                <line x1="0" y1="0" x2="100%" y2="0" stroke="#c2c2c2" stroke-width="4" />
            </svg>
        </header>

        <section class="flex h-4/5 w-full  justify-between overflow-hidden">

            @livewire('products-sales.search-box')

            <div class=" flex flex-col h-full w-full justify-around items-center ">
                @include('sections.product-sale.info-sale')
                @livewire('products-sales.table-sale')
            </div>

            @livewire('products-sales.sidebar')
        </section>
        @include('sections.product-sale.footer-sale')
    </section>

</div>