{{-- @php
$productos = [
    (object)['codigo' => '001', 'descripcion' => 'Producto 1', 'cantidad' => 5, 'peso' => 2.5, 'precio' => 10.99],
    (object)['codigo' => '002', 'descripcion' => 'Producto 2', 'cantidad' => 3, 'peso' => 1.2, 'precio' => 7.99],
    (object)['codigo' => '003', 'descripcion' => 'Producto 3', 'cantidad' => 7, 'peso' => 3.0, 'precio' => 15.49],
    (object)['codigo' => '003', 'descripcion' => 'Producto 3', 'cantidad' => 7, 'peso' => 3.0, 'precio' => 15.49],
    (object)['codigo' => '003', 'descripcion' => 'Producto 3', 'cantidad' => 7, 'peso' => 3.0, 'precio' => 15.49],
    (object)['codigo' => '003', 'descripcion' => 'Producto 3', 'cantidad' => 7, 'peso' => 3.0, 'precio' => 15.49],
    (object)['codigo' => '003', 'descripcion' => 'Producto 3', 'cantidad' => 7, 'peso' => 3.0, 'precio' => 15.49],
    (object)['codigo' => '003', 'descripcion' => 'Producto 3', 'cantidad' => 7, 'peso' => 3.0, 'precio' => 15.49],
    (object)['codigo' => '003', 'descripcion' => 'Producto 3', 'cantidad' => 7, 'peso' => 3.0, 'precio' => 15.49],
    (object)['codigo' => '003', 'descripcion' => 'Producto 3', 'cantidad' => 7, 'peso' => 3.0, 'precio' => 15.49],
];
@endphp --}}


<table id="table" class="border-collapse border border-gray-400 bg-slate-100 h-3/4 w-90 mb-2">
    <thead class="bg-gray-400 ">
        <tr class="header-table ">
            <th>Codigo</th>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Peso</th>
            <th>Precio</th>
            <th>Importe</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody id="table-body">
        @foreach($selectedProducts as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->cantidad * $product->precio }}</td>
            <td><button class="btn-accion">Editar</button></td>
        </tr>
        @endforeach
    </tbody>
</table>