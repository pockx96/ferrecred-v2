<div class="flex flex-col  items-center h-full w-1/3  bg-slate-100 rounded  border border-gray-400 mr-2">
    <div class="flex w-full h-2/5 justify-around items-center" >
        <h3 class="text-2xl text-orange-500">{{ $title }}</h3>
        <h4>{{$subtitle ?? ""}}</h4>
    </div>
    <svg  width="100%" height="2">
        <line x1="0" y1="0" x2="100%" y2="0" stroke="#c2c2c2" stroke-width="3" />
    </svg>
    <div class="flex h-2/5 items-center">
        <h3 class="text-4xl font-bold">{{$content}}</h3>
    </div>
</div>
