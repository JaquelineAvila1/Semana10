<h2 style="text-align: center; color:blue;">Nuevo Producto</h2>
<form action="{{url('product')}}" method="POST">
    @csrf
    @include('products.form')
</form>
