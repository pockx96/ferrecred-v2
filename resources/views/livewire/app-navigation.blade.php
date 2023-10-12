<nav x-data="{isOpen:true}"
    :class="{'w-1/6': isOpen, 'w-24': !isOpen}"
    class="flex flex-col h-full self-center justify-start  w-1/6 text-white duration-300 bg-slate-400" 
    >

    <header class="flex flex-col justify-center items-center h-24 relative">
        <div class="flex justify-around w-4/5 px-4">
            <x-fas-tools x-bind:style="{'transform': isOpen ? 'rotate(360deg)' : 'rotate(720deg)'}" class="w-8 duration-500"
            ></x-fas-tools>
            <h2 x-show="isOpen" class="font-bold text-lg title">Ferrered</h2>

        </div>
        <svg class="absolute bottom-0" width="100%" height="2">
            <line x1="0" y1="0" x2="100%" y2="0" stroke="#c2c2c2" stroke-width="4" />
        </svg>
        <x-ri-arrow-right-circle-fill id="openNavBtn" x-on:click="isOpen = !isOpen"
            class="w-10 h-10 absolute -right-3 top-5 bg-slate-400 rounded-full cursor-pointer duration-500"
            x-bind:style="{'transform': isOpen ? 'rotate(180deg)' : 'rotate(360deg)'}"/>

        
    </header>

    <ul class="flex flex-col self-center items-center justify-around h-2/5 w-4/5 mt-6 text-2xl">
        <li class="w-full">
            
            <a class="flex justify-around transition-colors hover:text-black "
                href="">@svg('fas-cart-shopping','w-6')
                <span x-show="isOpen">Ventas</span></a>

        </li>
        <li class="w-full">
            <a class="flex w-full justify-around title transition-colors hover:text-black"
                href="">@svg('fas-user','w-6')<span x-show="isOpen">Clientes</span></a>
        </li>
        <li class="w-full">
            <a class="flex w-full justify-around title transition-colors hover:text-black" href="">@svg('fas-tools','w-6')<span x-show="isOpen">Inventario</span></a>
        </li>
        <li class="w-full">
            <a class=" flex w-full justify-around title transition-colors hover:text-black" href="">@svg('fas-tools','w-6')<span x-show="isOpen">Configuración</span></a>
        </li>
    </ul>
    
</nav>
