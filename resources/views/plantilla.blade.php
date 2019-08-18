<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<head>
   <!-- … verificar que se tengan estas referencias … -->
   <link rel="stylesheet" href="/css/app.css">
   <!-- en lo posible use async o defer para la carga diferida -->
   <script async src="/js/app.js"></script>
   <meta charset="UTF-8">
   
   <title>@yield('titulo', 'Tienda')</title>
   

</head>
<div class="card-body">
<body >
       
    
     @include('partials/nav')
     
     <br>

     @yield('contenido')

  

</body>
</div>

</html>