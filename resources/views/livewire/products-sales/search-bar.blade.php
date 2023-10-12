<div x-data="{isFocus :true} ":class="{'w-3/4':isFocus,'w-full':!isFocus}" class="flex h-3/5 w-3/4 bg-white rounded-full text-gray-700 border border-gray-400 justify-between items-center duration-300">
    @svg('zondicon-search','w-1/12 h-3/5 text-gray-500')
    <input  x-on:click="isFocus = !isFocus" class="w-11/12 h-full px-2 bg-transparent" type="text" placeholder="¿Qué producto buscas? " />
</div>