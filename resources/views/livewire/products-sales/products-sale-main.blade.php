<div class="flex w-full h-screen  bg-slate-300 ">
    @livewire('app-navigation')
    <section class="flex flex-col w-full items-center justify-between ">
        @include('sections.product-sale.header-sale')
        
        <div class="flex h-4/5 w-full  justify-between overflow-hidden">

            @livewire('products-sales.search-box',['message' => session('message')])               

            @include('sections.product-sale.info-sale')

            @include('sections.product-sale.side-bar')
        </div>
        @livewire('products-sales.footer-sale')
    </section>

</div>