
@extends('layouts.contenido')

@section('titulo', 'FTS')
    
@section('contenidopagina')
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="StyleSheet" href="../resources/index/css/all.css">
<link rel="stylesheet" href="../resources/css/index/estilos.css">
<link rel="StyleSheet" href="../resources/css/index/js/slickslider/slick.css">
<link rel="StyleSheet" href="../resources/css/index/css/normalize.css">
<link rel="StyleSheet" href="../resources/css/index/css/style.css">

<br>
<br>
<br>
<div class="container-sm">
  
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../resources/css/img/banner1.jpeg" class="d-block w-100 img-fluid" height="700px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>FunnyTecnoShop</h5>
            <p>El lugar predilecto para los videojugadores</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../resources/css/img/playstation.jpg" class="d-block w-100 img-fluid" height="700px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>FunnyTecnoShop</h5>
            <p>Maravillas y descuentos en un mismo lugar</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../resources/css/img/xbox.jpg" class="d-block w-100 img-fluid" height="700px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>FunnyTecnoShop</h5>
            <p>Constante evolucion de las tecnologias para los gamers</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="../resources/css/img/switch.jpg" class="d-block w-100 img-fluid" height="700px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>FunnyTecnoShop</h5>
            <p>Tus clasicos favoritos en un solo lugar</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="../resources/css/img/pc.png" class="d-block w-100 img-fluid" height="700px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>FunnyTecnoShop</h5>
            <p>!Que esperas unete a la familia de FunnyTecnoShop!</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <hr>
 

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card border-light">
            <img src="../resources/css/index/imagenes/play.png" class="card-img-top img-fluid" alt="..."  width="250px">
        </div>
      </div>
      <div class="col">
        <div class="card  border-light">
          <img src="../resources/css/index/imagenes/Xbox.png" class="card-img-top img-fluid" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card border-light">
          <img src="../resources/css/index/imagenes/Nintendo.png" class="card-img-top img-fluid" alt="..." >
        </div>
      </div>
      
    </div>

    <hr>
    <form action="{{route('busqueda')}}" method="GET">
        <div class="input-group mb-3">
        

          <input type="text" class="buscar" name="buscar" placeholder="Buscar productos" aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn-dark btn-outline-warning" type="submit" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg></button>

        </div>
    </form>

    <hr>

    <div class="row row-cols-1 row-cols-md-4 g-4">
      @foreach ($productos as $producto)
      <div class="col">
    
        <div class="card bg-dark p-2 text-light bg-opacity-40" style="width: 18rem;">
            <img src="../storage/app/public/imagesproducto/{{$producto->imagen}}"class="card-img-top" alt="" height="300px">
            <div class="card-body">
              <h5 class="card-title">{{ $producto->n_producto }}</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item bg-dark p-2 text-light bg-opacity-50">
                <ul>
                  <li>{{$producto->precio}}</li>
                  @if ($producto->id_categoria == 1)
                    <li>Xbox</li> 
                    @elseif ($producto->id_categoria == 2)
                     <li>PS4</li>
                      @elseif ($producto->id_categoria == 3)
                      <li>PS5</li>
                        @elseif ($producto->id_categoria == 4)
                        <li>Switch</li>
              
                  @endif
                         
                </ul></li>
            </ul>
            <div class="card-body">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group me-2" role="group" aria-label="First group">
                  <form action="{{route('producto')}}"  method="GET" class="img-fluid">
                    <input type="hidden" name="producto" value="{{$producto->id}}">
                    <button class="btn btn-warning" type="submit">Ver producto</button>
                  </form>
                  <div class="btn-group me-2" role="group" aria-label="second group"></div>
                  <button class="btn btn-success" type="button">carrito</button>
                  </div>
              </div>
              
            </div>
        </div> 
    </div>
  
  @endforeach
</div>
  <br>


@endsection

