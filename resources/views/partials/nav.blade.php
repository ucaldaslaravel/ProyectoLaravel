<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Menu
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <a class="dropdown-item btn btn-primary"  >Catalogo Producto</a>

        @if (Auth()->check())
        <a class="dropdown-item btn btn-primary" >Ventas</a>
        <a class="dropdown-item btn btn-primary"  >Bajas ventas</a>
        <a class="dropdown-item btn btn-primary"  >Detalles ventas</a>
        @if (auth()->user()->perfil=='Administrador')

      <a class="dropdown-item btn btn-primary"  href="{{ route('clientes.index') }}" >Clientes</a>
<<<<<<< HEAD
      <a class="dropdown-item btn btn-primary"  >Proveedores</a>
=======
      
      <a class="dropdown-item btn btn-primary"  href="{{ route('proveedores.index') }}">Proveedores</a>
>>>>>>> 06312455bd1a34aea3f0f73a50bb3e498559ff2c
      <a class="dropdown-item btn btn-primary"  >Personal</a>
      <a class="dropdown-item btn btn-primary"  >Catalogo Producto</a>
      <a class="dropdown-item btn btn-primary" href="{{ route('presentacionesproductos.index') }}" >Presentaciones Producto</a>
      <a class="dropdown-item btn btn-primary"  href="{{ route('productos.index') }}" >Productos</a>
      <a class="dropdown-item btn btn-primary" >Pagos clientes</a>
      <a class="dropdown-item btn btn-primary" >Pagos proveedores</a>
      <a class="dropdown-item btn btn-primary"  >Devoluciones ventas</a>
      <a class="dropdown-item btn btn-primary"  >Detalles devoluciones ventas</a>
      <a class="dropdown-item btn btn-primary"  >Compras</a>
      <a class="dropdown-item btn btn-primary"  >Detalles compras</a>
      <a class="dropdown-item btn btn-primary"  >Devoluciones compras</a>
      <a class="dropdown-item btn btn-primary"  >Detalles devoluciones compras</a>
      @endif
      <a class="dropdown-item btn btn-primary" href="{{ route('logout')}}" >Cerrar sesion de {{ auth()->user()->nombre }} </a>


      @endif
    </div>


<!-- sólo si es un usuario invitado -->
@if (auth()->guest())
     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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

     
  </div>

 