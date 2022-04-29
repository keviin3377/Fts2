@extends('layouts.contenido')

@section('titulo', 'FTS')
    
@section('contenidopagina')
<link rel="stylesheet" href="../resources/css/index/estilos.css">

<br>
<br>
<br>
<br>
<br>

<div class="container-sm">
    
    @foreach ($producto as $p )
        

    <div class="card bg-dark p-2 text-light bg-opacity-40 mb-3" style="max-width: 100%;">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="../storage/app/public/imagesproducto/{{$p->imagen}}" class="rounded-start" height="500px" width="400px" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h1 class="card-title">{{$p->n_producto}}</h1>
            <br>
            <hr>
            <br>
            <h4 class="card-text">{{$p->d_producto}}</h4>
            <ul>
                <li>{{$p->precio}}</li>
                @if ($p->id_categoria == 1)
                  <li>Xbox</li> 
                  @elseif ($p->id_categoria == 2)
                   <li>PS4</li>
                    @elseif ($p->id_categoria == 3)
                    <li>PS5</li>
                      @elseif ($p->id_categoria == 4)
                      <li>Switch</li>
            
                @endif
            </ul>
            <br>
            <hr>
            <br>
            <div>
                <button class="btn-danger">-</button>
                <input type="number" name="" value="1" id="">
                <button class="btn-success">+</button>
            </div>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        </div>
    </div>

    @endforeach
    @endsection
</div>