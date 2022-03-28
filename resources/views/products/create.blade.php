


<h2 style="text-align: center; color:purple;">Agregar producto</h2>
<hr>


<form action="{{url('product')}}" method="POST">
    @csrf
    @include('products.form')
</form>




