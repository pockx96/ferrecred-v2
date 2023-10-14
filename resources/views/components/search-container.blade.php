<div class="flex justify-center w-full h-2/5 absolute">
    <div class="bg-slate-100 flex justify-start w-3/5 rounded-20px border border-gray-400 px-6 py-2 overflow-y-auto">
        <ul class="w-full">
            @forelse ($products as $product)
            <li class="text-lg text-gray-500 cursor-pointer hover:bg-slate-500 hover:text-white py-2">
                {{ $product->description }}
                <button wire:click="test()">click</button>
            </li>
            @empty
            <li>Inventario vacío D:</li>
            @endforelse
        </ul>
    </div>
</div>