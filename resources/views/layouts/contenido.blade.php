<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources\css\blade\encabezado.css">
    <title>@yield('titulo')</title>
    <link rel="icon" href="Fts2/resources/css/carrito/logo.jpeg">
</head>
<body>
    @extends('layouts.encabezado')
        
        @yield('contenidopagina')

    @extends('layouts.piepagina')
</body>
</html>