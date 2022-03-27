

<label for="name">Nombre del producto:</label>
<input type="text" name="name" id="" value="{{isset($product->name)?$product->name:''}}">

<label for="cantidad">Cantidad:</label>
<input type="number" name="cantidad" id="" value="{{isset($product->cantidad)?$product->cantidad:''}}">

<label for="precio">Precio:</label>
<input type="number" step="any" name="precio" id="" value="{{isset($product->precio)?$product->precio:''}}">

<label for="categoria">Categoria:</label>
<input type="text" name="categoria" id="" value="{{isset($product->categoria)?$product->categoria:''}}">

<button type="submit">Guardar</button>