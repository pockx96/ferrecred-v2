<section class=" flex flex-col h-full w-full justify-around items-center ">
    <div class="flex w-full h-1/4  justify-start px-8 py-6">
        <x-total-sale-box></x-total-sale-box>
        <x-customer-info></x-customer-info>
    </div>
    @livewire('products-sales.table-sale')
</section>