<hr>
<h2 style="text-align: center; color:teal;">Editar información del producto</h2>

<hr>




<form action="{{url('/product/' .$product->id)}}" method="POST">
    @csrf
    {{method_field('PUT')}}
    @include('products.form')
 
</form>