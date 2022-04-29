<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--   link para los estilos -->
  <link rel="stylesheet" href="/bluealienstore/resources/css/pasarela/pago.css">
  <link rel="stylesheet" href="/bluealienstore/resources/css/carrito-movibless.css">
    <!-- javascrip -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="/bluealienstore/resources/js/pasarela/main.js"></script>
  <title>Pasarela de Pagos</title>
</head>
<body>
    <main class="ea-main">
      <div class="ea-top">
        <span class="ea-title">Seleccione una forma de pago</span><span class="ea-ref">Ref: REF - 001</span>
      </div>
      <div class="ea-container">
        <form class="ea-form">
          <div class="ea-form-check">
            <div class="ea-radio" id="radio1">
                <label for="tc">
                  <img src="/bluealienstore/resources/img/pasarela/card.png" alt="tarjeta credito" draggable="false"><span>Tarjeta de Credito</span></label>
                  <input type="radio" name="mp" tabindex="0" id="tc">
            </div>
            <div class="ea-radio" id="radio2">
                <label for="pse">
                  <img src="/bluealienstore/resources/img/pasarela/pse.png" alt="cuenta bancaria" draggable="false" width="40"><span>Pse</span></label>
                  <input type="radio" name="mp" tabindex="0" id="pse">
            </div>
            <div class="ea-radio" id="radio3">
                <label for="cash">
                  <img src="/bluealienstore/resources/img/pasarela/cash.PNG" alt="pago efectivo" draggable="false" width="40"><span>Nequi</span></label>
                  <input type="radio" name="mp" tabindex="0" id="cash">
            </div>
          </div>
          <div id="ea-cc">
            <div class="ea-form-input">
              <div class="ea-input-card">
                <label>Numero de tarjeta</label>
                <div class="ea-icard">
                  <div>
                    <input type="text" placeholder="0000" maxlength="4"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">-
                    <input type="text" placeholder="0000" maxlength="4"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">-
                    <input type="text" placeholder="0000" maxlength="4"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">-
                    <input type="text" placeholder="0000" maxlength="4"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                  </div>
                  <img src="/bluealienstore/resources/img/pasarela/icard.PNG" alt="input tarjeta" width="90">
                </div>
              </div>
            </div>
            <div class="ea-form-input">
              <div class="ea-input-date">
                <label>Fecha de vencimiento y Numero cuotas</label>
                <div class="ea-idate">
                  <select>
                    <option value="mes">mes</option>
                    <option value="enero">Enero</option>
                    <option value="febrero">Febrero</option>
                    <option value="marzo">Marzo</option>
                    <option value="abril">Abril</option>
                    <option value="mayo">Mayo</option>
                    <option value="junio">Junio</option>
                    <option value="julio">Julio</option>
                    <option value="agosto">Agosto</option>
                    <option value="septiembre">Septiembre</option>
                    <option value="octubre">Octubre</option>
                    <option value="noviembre">Noviembre</option>
                    <option value="diciembre">Diciembre</option>
                  </select>
                  <select class="ea-select-ano">
                    <option value="ano">año</option>
                    <option value="2027">2027</option>
                    <option value="2026">2026</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                  </select>
                  <select class="ea-select-cuot">
                    <option value="cuotas">cuotas</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                  </select>
                </div>
              </div>
                <div class="ea-input-cvc">
                  <label for="">CVC</label>
                  <div>
                    <div class="ea-icvc">
                      <input type="text" maxlength="3" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                    </div>
                    <i class="test medium ui test2 material-icons">help</i>
                  </div>
                </div>
              </div>
          </div> <!-- ea-cc -->
          <div id="ea-pse">
            <div class="ea-form-input">
              <div class="ea-input-date">
                <label>Tipo de persona y cuenta</label>
                <div class="ea-idate">
                  <select>
                    <option value="persona">persona</option>
                    <option value="enero">Natural</option>
                    <option value="febrero">Juridica</option>
                  </select>
                  <select>
                    <option value="tipoc">cuenta</option>
                    <option value="2027">Ahorros</option>
                    <option value="2026">Corriente</option>
                  </select>
                </div>
              </div>
                <div class="ea-input-cvc">
                  <label for="">Clave</label>
                  <div>
                    <div class="ea-icvc">
                      <input type="text" maxlength="4" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                    </div>
                  </div>
                </div>
              </div>
          </div><!-- ea-pse -->
          <div id="ea-cash">
          </div><!-- ea-pse -->
          <div class="ea-information-title">Información de facturación</div>
          <div class="ea-information">
            <div class="ea-itext-container">
              <div class="ea-itext">
                <label for="name">Nombres</label>
                <input type="text" id="name" autocomplete="off" maxlength="45">
              </div>
              <div class="ea-itext">
                <label for="lastName">Apellidos</label>
                <input type="text" id="lastName" autocomplete="off" maxlength="45">
              </div>
            </div>
            <div class="ea-itext-container">
              <div class="ea-itext">
                <label for="name">Tipo de documento</label>
                <select>
                  <option value="cc">Cedula de ciudadania</option>
                  <option value="ti">Tarjeta de identidad</option>
                </select>
              </div>
              <div class="ea-itext">
                <label for="doc">Numero de documento</label>
                <input type="text" id="doc" autocomplete="off" maxlength="10">
              </div>
            </div>
            <div class="ea-itext-container">
              <div class="animated ea-itext">
                <label for="mail">Correo</label>
                <input class="animated" type="email" id="mail" autocomplete="off" maxlength="45" required>
                <span id="ea-alert-mail" class="animated"></span>
              </div>
              <div class="ea-itext">
                <label for="phone">Teléfono</label>
                <input type="tel" id="phone" autocomplete="off" maxlength="10">
              </div>
            </div>
          </div>
          <div class="cartsss">
                <h2><a href="{{route('formularios.factura')}}" data-id="1" class="btn-add-cart">Pagar</a></h2>
            </div>
        </form>
    </main>
  </div>
</body>
</html>
