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