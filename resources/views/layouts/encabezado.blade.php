<link rel="stylesheet" href="../resources\css\blade\encabezado.css">
<link rel="icon" href="Fts2/resources/css/carrito/logo.jpeg">

<script src="{{ asset('js/app.js') }}" defer></script>
    

<link rel="stylesheet" href="../resources/css/carrito/style.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<nav>    
    <a href="{{route('index')}}" class="tittle"><img src="../resources/css/img/logo.jpeg" class="logo" alt="">FunnyTecnoShop</a>
    
            <ul>
                <li><a href="{{route('novedades')}}" class="">Novedades</a></li>
                
                <li>
               
                    <div class="header-section container">
                    <a href="http://localhost/Fts2/public/formularios">
                        <div>
                            <img onmouseover="showCart(this)" class="cart" src="../resources/css/carrito/cart.png" alt="">
                            <p class="count-product">0</p>
                        </div>
                        <div class="cart-products" id="products-id">
                            <p class="close-btn" onclick="closeBtn()">X</p>
                            <h3>Mi carrito</h3>
                            <div class="card-items">
                            </div>
                            <div class="cartss">
                            <h2>Total: <strong class="price-total">0</strong> $ <a href="{{route('formularios.pasarela')}}" data-id="1" class="btn-add-cart">Comprar</a></h2>
                        </div>
                    </div>
                
    
                </li>
                @if (Route::has('login'))
                    @auth
                    <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                             @if (Auth::user()->rol == 'admin')
                             <a class="dropdown-item" href="{{route('productos.index')}}">
                                Productos
                            </a>
                            <a class="dropdown-item" href="{{route('categorias.index')}}">
                                Categorias
                            </a>
                             @endif
                            

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else    
                        <li><a href="{{ route('login') }}"> Iniciar sesión</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"> Registrarse </a></li>   
                        @endif
                    @endauth
                @endif
                     
            </ul>
</nav>


<script>
    function showCart(x){
        document.getElementById("products-id").style.display = "block";
    }
    function closeBtn(){
         document.getElementById("products-id").style.display = "none";
    }

</script>
<script src="../resources/css/carrito/custom.js" ></script>

{{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}