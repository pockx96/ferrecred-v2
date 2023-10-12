@php
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
@endphp


<table id="table" class="border-collapse border border-gray-400 bg-slate-100 h-3/4 w-90 mb-2">
    <thead style="position: sticky; top: 0; " class="bg-gray-400 ">
        <tr class="header-table ">
            <th style="position: sticky; top: 0; ">Codigo</th>
            <th style="position: sticky; top: 0; ">Descripción</th>
            <th style="position: sticky; top: 0; ;">Cantidad</th>
            <th style="position: sticky; top: 0; ">Peso</th>
            <th style="position: sticky; top: 0; ">Precio</th>
            <th style="position: sticky; top: 0; ">Importe</th>
            <th style="position: sticky; top: 0; ">Acción</th>
        </tr>
    </thead>
    <tbody id="table-body">
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->codigo }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->cantidad }}</td>
            <td>{{ $producto->peso }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->cantidad * $producto->precio }}</td>
            <td><button class="btn-accion">Editar</button></td>
        </tr>
        @endforeach
    </tbody>
</table>