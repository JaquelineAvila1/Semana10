<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
 
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY">
    </script>
    
    <style>
        .separador{
            margin-top: 45px;
        }
    </style>
</head>
<body class="separador">
<div class="container">
<h1>Inventario de productos</h1>

<table class="table table-warning table-responsive-lg text-center">
    <tr>
 
        <thead>
            <tr><td>N°</td>
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
                <td>{{ $product->categoría}}</td>
                <td>
                  <a href="{{url('/product/create')}}">Crear</a>
                </td>
                <td><a href="{{url('/product/'.$product->id.'/edit/')}}"> Editar</a></td>
                <td>
                    <form action="{{url('/product/'.$product->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Eliminar"
                        onclick="return confirm('¿Desea eliminar el producto de su lista?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
 
    </tr>
</table>

</div>



</body>
</html>