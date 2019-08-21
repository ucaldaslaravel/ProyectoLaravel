
@extends('plantilla')

@section('titulo', 'Baja producto')

@section('contenido')
<div class="mt-5 text-center">
        <h1>Baja producto</h1>
</div>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif

<form method="POST" action="{{route('bajasproductos.store')}}">
    @csrf
    @include('bajasproductos.form', ['baja' => new App\BajasProductos])
    <div class="mt-3 text-center">
        <button class="btn btn-success btn-lg" type="submit" >Dar de baja</button>
    </div>
    
</form>
@endsection