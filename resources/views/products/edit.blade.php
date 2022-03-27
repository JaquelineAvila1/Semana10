<h2>Editar información de productos</h2>
<form action="{{url('/product/' .$product->id)}}" method="POST">
    @csrf
    {{method_field('PUT')}}
    @include('products.form')
 
</form>