
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
</head>

<body>
        <form action="form-group">
          <label for="nombre">Nombre del producto:</label>
          <input type="text" name="nombre" id="" value="{{isset($product->nombre)?$product->nombre:''}}">

          <label for="cantidad">Cantidad:</label>
          <input type="number" name="cantidad" id="" value="{{isset($product->cantidad)?$product->cantidad:''}}">

          <label for="precio">Precio:</label>
          <input type="number" step="any" name="precio" id="" value="{{isset($product->precio)?$product->precio:''}}">

          <label for="categoría">Categoría:</label>
          <input type="text" name="categoría" id="" value="{{isset($product->categoría)?$product->categoría:''}}">

          <button type="submit">Guardar</button>
            

        </form>

</body>
</html>

