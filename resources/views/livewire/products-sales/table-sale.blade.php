{{-- @php
$productos = [
(object)['id' => '002', 'description' => 'Producto 2', 'amount' => 3, 'weight' => 1.2, 'price' => 7.99],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '001', 'description' => 'Producto 1', 'amount' => 5, 'weight' => 2.5, 'price' => 10.99],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
(object)['id' => '003', 'description' => 'Producto 3', 'amount' => 7, 'weight' => 3.0, 'price' => 15.49],
];
@endphp --}}


<div class="flex flex-col h-3/4 w-90 mb-2 overflow-y-scroll overflow-hidden z-0">
    <table class="min-w-full text-center text-sm font-light">
        <thead 
            class="sticky top-0 border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
            <tr>
                <th scope="col" class=" px-6 py-4">Codigo</th>
                <th scope="col" class=" px-6 py-4">Descripción</th>
                <th scope="col" class=" px-6 py-4">Cantidad</th>
                <th scope="col" class=" px-6 py-4">Peso</th>
                <th scope="col" class=" px-6 py-4">Precio</th>
                <th scope="col" class=" px-6 py-4">Importe</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($selectedProducts as $product)
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ $product->id }}</td>
                <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ $product->description}}</td>
                <td class="whitespace-nowrap  px-6 py-4 font-medium">{{1}}</td>
                <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ $product->weight}}</td>
                <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ $product->price}}</td>
                <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ $product->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

