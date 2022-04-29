@extends('layouts.contenido')

@section('titulo', 'FTS')
    
@section('contenidopagina')
<link rel="stylesheet" href="../resources/css/index/estilos.css">
<br>
<br>
<br>
<br>
<div class="container-sm">
    <form action="{{route('busqueda')}}" method="GET">
        <div class="input-group mb-3">
        

          <input type="text" class="buscar" name="buscar" placeholder="Buscar productos" aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn-dark btn-outline-warning" type="submit" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg></button>

        </div>
    </form>
  

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($producto as $productos)

        <div class="col">
      
          <div class="card bg-dark p-2 text-light bg-opacity-40" style="width: 18rem;">
              <img src="../storage/app/public/imagesproducto/{{$productos->imagen}}"class="card-img-top" alt="" height="300px">
              <div class="card-body">
                <h5 class="card-title">{{ $productos->n_producto }}</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item bg-dark p-2 text-light bg-opacity-50">
                  <ul>
                    <li>{{$productos->precio}}</li>
                    @if ($productos->id_categoria == 1)
                      <li>Xbox</li> 
                      @elseif ($productos->id_categoria == 2)
                       <li>PS4</li>
                        @elseif ($productos->id_categoria == 3)
                        <li>PS5</li>
                          @elseif ($productos->id_categoria == 4)
                          <li>Switch</li>
                
                    @endif
                           
                  </ul></li>
              </ul>
              <div class="card-body">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group me-2" role="group" aria-label="First group">
                    <form action="{{route('producto')}}"  method="GET">
                      <input type="hidden" name="producto" value="{{$productos->id}}">
                      <button class="btn btn-warning" type="submit">Ver producto</button>
                    </form>
                    <div class="btn-group me-2" role="group" aria-label="second group"></div>
                    <button class="btn btn-success" type="button">carrito</button>
                    </div>
                </div>
                
              </div>
          </div> 
      </div>
      <br>
      <br>
      @endforeach
</div>
