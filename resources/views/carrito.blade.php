@extends('layouts.contenido')

@section('titulo', 'Carrito')
    
@section('contenidopagina')
<link rel="stylesheet" href="../resources/css/index/estilos.css">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Ionicons CSS -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- App CSS -->
    <link href="<?php echo (""); ?>../../../assets/css/app.css" rel="stylesheet">

  </head>
  <br>
  <br>
  <br>

<div class="container-sm">
<body>
    <header>
        <div class="header-section container">
        <a href="http://localhost/bluealienstore/public/formularios"><img class="logo" src="/bluealienstore/resources/img/logo.png" alt=""></a>
            <div>
                <img onmouseover="showCart(this)" class="cart" src="/bluealienstore/resources/img/cart.png" alt="">
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
    </header>
    <section class="container">
        <div class="products">
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>24.490</span></p>
                </div>
                <p class="title">Case Cofre Uasp Disco Solido Ssd Usb 3.0 - Puntostore</p>
                <a href="" data-id="1" class="btn-add-cart">Añadir al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>9.990</span></p>
                </div>
                <p class="title">Cofre Case Para Disco Duro Sata 2.5 Usb 2.0 Hdd No</p>
                <a href="" class="btn-add-cart" data-id="2">Añadir al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>22.290</span></p>
                </div>
                <p class="title">Cofre Disco Duro 2.5 Sata Usb 3.0 Puntostore</p>
                <a href="" data-id="3" class="btn-add-cart">Añadir al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>69.990</span></p>
                </div>
                <p class="title">Disco duro 1TB USB Expansion Seagate negro</p>
                <a href="" data-id="4" class="btn-add-cart">Añadir al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>139.990</span></p>
                </div>
                <p class="title">Disco duro 2TB rugged USB 3.0 LaCie</p>
                <a href="" data-id="5" class="btn-add-cart">Añadir al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>64.990</span></p>
                </div>
                <p class="title">DISCO DURO ELEMENTS 2TB PENDRIVE 32GB SANDISK</p>
                <a href="" data-id="6" class="btn-add-cart">Añadir al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>549.000</span></p>
                </div>
                <p class="title">Disco Duro Externo Seagate Expansion 4tb Usb 3.0</p>
                <a href="" data-id="7" class="btn-add-cart">Añadir al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>49.990</span></p>
                </div>
                <p class="title">Disco duro externo WD Elements 1TB 2.5 pulgadas USB 3.0</p>
                <a href="" data-id="8" class="btn-add-cart">Añadir al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>169.990</span></p>
                </div>
                <p class="title"> Disco Duro Portatil LaCie Moon Silver 2TB</p>
                <a href="" data-id="9" class="btn-add-cart">Añadir al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>114.990</span></p>
                </div>
                <p class="title">Disco Duro SSD 1TB Crucial MX500 2.5 SATA</p>
                <a href="" data-id="10" class="btn-add-cart">Añadir al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="" alt="">
                    <p>$<span>19.990</span></p>
                </div>
                <p class="title">Porta disco duro</p>
                <a href="" data-id="11" class="btn-add-cart">Añadir al carrito</a>
            </div>
        </div>
    </section>


<script src="js/menu.js"></script>
<script src="js/slider.js"></script>
    <script>
        function showCart(x){
            document.getElementById("products-id").style.display = "block";
        }
        function closeBtn(){
             document.getElementById("products-id").style.display = "none";
        }

    </script>
    <script src="/Fts2/resources/js/customer.js" ></script>
</body>
    @endsection
</div>
    </html>