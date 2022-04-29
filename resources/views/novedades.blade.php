@extends('layouts.contenido')

@section('titulo', 'Novedades')
    
@section('contenidopagina')

  <link rel="stylesheet" href="../resources/css/index/css/estilos.css">
  <link rel="stylesheet" href="../resources/css/index/estilos.css">

  <script src="../resources/js/jquery-3.3.1.min.js"></script>
  <script src="../resources/js/filtro.js"></script>
  <script src="../resources/css/carrito/custom.js" ></script>
  <br>
  <br>
  <br>
  <div class="container-sm">
    <div class="menu">
      <ul>
        <li class="todos active"><a href="#" class="btn-menu" data-filter="todos">Todos</a></li>
        <li class="pc"><a href="#" class="btn-menu" data-filter="pc">Pc</a></li>
        <li class="xbox"><a href="#" class="btn-menu" data-filter="xbox">Xbox</a></li>
        <li class="ps4"><a href="#" class="btn-menu" data-filter="ps4">PS4</a></li>
        <li class="ps5"><a href="#" class="btn-menu" data-filter="ps5">PS5</a></li>
        <li class="switch"><a href="#" class="btn-menu" data-filter="switch">Switch</a></li>	
      </ul>
    </div>

    <div class="galeria">
      <div class="title-img">
        <h3>Galeria de Productos</h3>
      </div>

      <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($productos as $t )
          <div class="box-img todos">
            <div class="card-item">
                <form action="{{route('producto')}}"  method="GET">
                  <input type="hidden" name="producto" value="{{$t->id}}">
                  <button class="btn btn-warning" type="submit"> <img class="proimg" src="../storage/app/public/imagesproducto/{{$t->imagen}}"height="400px" alt=""> </button>
                </form>
              
                <div class="card-content">
               
                  <div class="products">
                      <div class="carts">
                        <h3 class="title">{{$t->n_producto}}</h3>
                        <p>
                        <span class="precio">{{$t->precio}}</span>
                        </p>
                      
                        <a href="" data-id="{{$t->id}}" class="btn-add-cart"> Añadir al carrito</a>
                      </div>
                  </div>
                 </div>
              
            </div>
          </div>
        @endforeach
        
        @foreach ($xbox as $x )
          <div class="box-img xbox">
            <div class="card-item">
              <form action="{{route('producto')}}"  method="GET">
                <input type="hidden" name="producto" value="{{$x->id}}">
                <button class="btn btn-warning" type="submit"> <img src="../storage/app/public/imagesproducto/{{$x->imagen}}"height="400px" alt=""> </button>
              </form> 
              <div class="card-content">
               
                <div class="products">
                    <div class="carts">
                      <h3 class="title">{{$x->n_producto}}</h3>
                      <p>
                      <span>{{$x->precio}}</span>
                      </p>
                    
                      <a href="" data-id="{{$x->id}}" class="btn-add-cart"> Añadir al carrito</a>
                    </div>
                </div>
               </div>
            </div>
          </div>
        @endforeach

        @foreach ($ps4 as $p4 )
          <div class="box-img ps4">
            <div class="card-item">
              <form action="{{route('producto')}}"  method="GET">
                <input type="hidden" name="producto" value="{{$p4->id}}">
                <button class="btn btn-warning" type="submit"> <img src="../storage/app/public/imagesproducto/{{$p4->imagen}}"height="400px" alt=""> </button>
              </form>
              <div class="card-content">
                <div class="products">
                  <div class="carts">
                    <h3 class="title">{{$p4->n_producto}}</h3>
                    <p>
                    <span>{{$p4->precio}}</span>
                    </p>
                  
                    <a href="" data-id="{{$p4->id}}" class="btn-add-cart"> Añadir al carrito</a>
                  </div>
              </div>
              </div>
            </div>
          </div>
        @endforeach

        @foreach ($ps5 as $p5 )
          <div class="box-img ps5">
            <div class="card-item">
              <form action="{{route('producto')}}"  method="GET">
                <input type="hidden" name="producto" value="{{$p5->id}}">
                <button class="btn btn-warning" type="submit"> <img src="../storage/app/public/imagesproducto/{{$p5->imagen}}"height="400px" alt=""> </button>
              </form>
              <div class="card-content">
                <div class="products">
                  <div class="carts">
                    <h3 class="title">{{$p5->n_producto}}</h3>
                    <p>
                    <span>{{$p5->precio}}</span>
                    </p>
                  
                    <a href="" data-id="{{$p5->id}}" class="btn-add-cart"> Añadir al carrito</a>
                  </div>
              </div>
              </div>
            </div>
          </div>
        @endforeach

        @foreach ($pc as $p )
          <div class="box-img pc">
            <div class="card-item">
              <form action="{{route('producto')}}"  method="GET">
                <input type="hidden" name="producto" value="{{$p->id}}">
                <button class="btn btn-warning" type="submit"> <img src="../storage/app/public/imagesproducto/{{$p->imagen}}"height="400px" alt=""> </button>
              </form>
              <div class="card-content">
                <div class="products">
                  <div class="carts">
                    <h3 class="title">{{$p->n_producto}}</h3>
                    <p>
                    <span>{{$p->precio}}</span>
                    </p>
                  
                    <a href="" data-id="{{$p->id}}" class="btn-add-cart"> Añadir al carrito</a>
                  </div>
              </div>
              </div>
            </div>
          </div>
        @endforeach

        @foreach ($switch as $s )
          <div class="box-img switch">
            <div class="card-item">
              <form action="{{route('producto')}}"  method="GET">
                <input type="hidden" name="producto" value="{{$s->id}}">
                <button class="btn btn-warning" type="submit"> <img src="../storage/app/public/imagesproducto/{{$s->imagen}}"height="400px" alt=""> </button>
              </form>
              <div class="card-content">
                <div class="products">
                  <div class="carts">
                    <h3 class="title">{{$s->n_producto}}</h3>
                    <p>
                    <span>{{$s->precio}}</span>
                    </p>
                  
                    <a href="" data-id="{{$s->id}}" class="btn-add-cart"> Añadir al carrito</a>
                  </div>
              </div>
              </div>
            </div>
          </div>
        @endforeach

  

      </div>
    </div>



  @endsection
    