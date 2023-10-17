<div>
    @if ($isVisible)
    <div class="flex justify-center w-full h-1/3 absolute z-10">
        <div
            class="bg-slate-100 flex justify-start w-3/5 rounded-20px border border-gray-400 overflow-y-auto overflow-hidden">
            <ul class="w-full mt-4">
                @forelse ($products as $product)
                <li wire:click="productSelect({{$product->id}})"
                    class="flex w-full text-lg text-gray-800 cursor-pointer hover:bg-slate-200  py-2">
                    @svg('zondicon-search','w-14 text-gray-500 px-4'){{ $product->description }}
                </li>
                @empty
                <li>Producto no encontrado , trata con otra descripción</li>
                @endforelse
            </ul>
        </div>
    </div>
    @endif
</div>