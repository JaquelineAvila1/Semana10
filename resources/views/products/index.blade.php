<h1>Inventario de productos</h1>
<a href="{{url('/product/create')}}">Crear</a>
<table>
    <tr>
 
        <thead>
            <tr><td>#</td>
            <td>Nombre del producto</td>
            <td>Cantidad</td>
            <td>Precio</td>
            <td>Categoria</td>
            <td></td></tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id}}</td>
                <td>{{ $product->nombre}}</td>
                <td>{{ $product->cantidad}}</td>
                <td>{{ $product->precio}}</td>
                <td>{{ $product->categoria}}</td>
                <td><a href="{{url('/product/'.$product->id.'/edit/')}}"> Edit</a></td>
                <td>
                    <form action="{{url('/product/'.$product->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Eliminar"
                        onclick="return confirm('¿Desea eliminar el registro?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
 
    </tr>
</table>