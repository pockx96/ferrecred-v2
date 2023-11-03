<div class="flex w-full h-screen  bg-slate-300 ">
    <section class="flex flex-col w-full items-center justify-between ">

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