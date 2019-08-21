
<div  class="navbar navbar-light" >
    <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Menu
    </button>
    <div class="dropdown-menu" class="collapse" class="nav" aria-labelledby="dropdownMenu2">

      <a class="dropdown-item btn btn-primary" href="/" >Inicio</a>
      <a class="dropdown-item btn btn-primary" href="{{route('Catalogo.index')}}" >Catalogo Productos</a>

      @if (Auth()->check())
        <a class="dropdown-item btn btn-primary" href="{{route('ventas.index')}}">Ventas</a>
        <a class="dropdown-item btn btn-primary"  >Bajas ventas</a>
        @if (auth()->user()->perfil=='Administrador')

          <a class="dropdown-item btn btn-primary"  href="{{ route('clientes.index') }}" >Clientes</a>
          <a class="dropdown-item btn btn-primary"  href="{{ route('proveedores.index') }}">Proveedores</a>
          <a class="dropdown-item btn btn-primary"  href="{{route('personal.index')}}">Personal</a>
          <a class="dropdown-item btn btn-primary" href="{{ route('categoria.index') }}" >Categorias Producto</a>

          <a class="dropdown-item btn btn-primary" href="{{ route('presentacionesproductos.index') }}" >Presentaciones Producto</a>
          <a class="dropdown-item btn btn-primary"  href="{{ route('productos.index') }}" >Productos</a>
          <a class="dropdown-item btn btn-primary" >Pagos clientes</a>
          <a class="dropdown-item btn btn-primary" >Pagos proveedores</a>
          <a class="dropdown-item btn btn-primary"  >Devoluciones ventas</a>
          <a class="dropdown-item btn btn-primary"  href="{{route('compras.index')}}" >Compras</a>
          <a class="dropdown-item btn btn-primary"  >Devoluciones compras</a>
        @endif
      @endif
    </div>


<!-- sólo si es un usuario invitado -->
@if (auth()->guest())
     
<button type="button"  class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
    Autenticarse
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Autenticarse</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-inline" method="POST" action="login">
              
                @csrf


            <input type="text" class="form-control"  name="id_persona" placeholder="Id">
            <p></p>
            <input type="password" class="form-control" name="contrasena" placeholder="Password">
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit"  class="btn btn-primary">Iniciar sesion</button>
        </form>

        </div>
      </div>
    </div>
  </div>

@endif
@if (Auth()->check())
<form action="{{ route('logout')}}">
  <input type="submit" class="btn btn-outline-danger " value="Cerrar sesion de {{ auth()->user()->nombre }}" />
</form>

  @endif

     
  </div>

 