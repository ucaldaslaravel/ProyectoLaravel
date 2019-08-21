@extends('plantilla')

@section('titulo', 'Categoria')

@section('contenido')

<br>
<h3>Editar Categoria</h3>
<br>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif

<form method="post" action={{ route('categoria.update', $categoria->id_categoria_producto) }}>
    {!! method_field('PUT') !!}
    @include('CategoriasProductos.form')
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>	


@endsection