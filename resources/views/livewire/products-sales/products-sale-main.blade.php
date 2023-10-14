<div class="flex w-full h-screen  bg-slate-300 ">
    @livewire('app-navigation')
    <section class="flex flex-col w-full items-center justify-between ">
        @include('sections.product-sale.header-sale')
        
        <div class="flex h-4/5 w-full  justify-between overflow-hidden">

            @if (session()->has('message') && !empty(session('message')))
                @livewire('products-sales.search-box',['message' => session('message')])  
            @endif

            <section class=" flex flex-col h-full w-full justify-around items-center ">
                @include('sections.product-sale.info-sale')
                @livewire('products-sales.table-sale')
            </section>

            @include('sections.product-sale.side-bar')
        </div>
        @livewire('products-sales.footer-sale')
    </section>

</div>