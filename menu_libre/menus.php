<?php
session_reset();

require_once '../database.php';
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador </title>
    <link rel="shortcut icon" href="imagenes/minilogo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="imagenes/minilogo.png">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="four columns">
                    <h1><img src="" alt="" >Buscador de Restaurantes</h1>
                </div>
                <div class="two columns u-pull-right">
                    <ul>
                        <li class="submenu">
                            <img src="imagenes/logo5.png" alt="" width="250">
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="hero">
        <div class="container"> 
            <div class="row">  
                <div class="six columns">
                    <div class="contenido-hero">
                        <h2>Descubre mas de 500 Restaurantes al alcance de tu mano</h2>
                        <p>El mejor sitio de busqueda de la mitad del mundo y del mundo entero</p>
                        <form>
                            <input class="u-full-width" type="text" name="buscar" placeholder="Busca los lugares cerca de tu domicilio" name="" id="buscador">
                            <input type="submit" class="submit-buscador">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="barra">
        <div class="container">
            <div class="row">
                <div class="four columns icono icono1">
                    <p>Gran variedad de platillos de la region<br>
                    Explora los nuevos platillos</p>
                </div>
                <div class="four columns icono icono2">
                    <p>chefs experimentaddo<br>
                    Prueba las nuevas combinacion</p>
                </div>
                <div class="four columns icono icono3">
                    <p>Bebida ilimitada<br>
                    Prueba tu bebida favorita</p>
                </div>
            </div>
        </div>
    </div>



    <div class="lista-platillos" class="container">
        <h1 class="encabezado">Pedidos en Linea</h1>

        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="imagenes/gallery-img-01.jpg" class="imagen-platillo u-full-width">
                    <div class="info-card">
                        <h4>Cuybrisket al leño</h4>
                        <p>Bebida ilimitada</p>
                        <img src="imagenes/clasificacion.png" width="25">
                        <p class="precio">$50 <span class="u-pull-right">$18</span> </p> 
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="imagenes/gallery-img-02.jpg" class="imagen-platillo u-full-width">
                    <div class="info-card">
                        <h4>Cuybrisket crocant</h4>
                        <p>Bebida ilimitada</p>
                        <img src="imagenes/clasificacion.png" width="25">
                        <p class="precio">$50 <span class="u-pull-right">$25</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="imagenes/gallery-img-03.jpg" class="imagen-platillo u-full-width">
                    <div class="info-card">
                        <h4>Cuybrisket en su salsa</h4>
                        <p>Bebida ilimitada</p>
                        <img src="imagenes/clasificacion.png" width="25">
                        <p class="precio">$50 <span class="u-pull-right">$15</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al carrito</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="imagenes/gallery-img-04.jpg" class="imagen-platillo u-full-width">
                    <div class="info-card">
                        <h4>Cuybrisket china</h4>
                        <p>Bebida ilimitada</p>
                        <img src="imagenes/clasificacion.png" width="25" >
                        <p class="precio">$50 <span class="u-pull-right">$15</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="imagenes/gallery-img-05.jpg" class="imagen-platillo u-full-width">
                    <div class="info-card">
                        <h4>Cuybrisket casero</h4>
                        <p>Bebida ilimitada</p>
                        <img src="imagenes/clasificacion.png" width="25">
                        <p class="precio">$50 <span class="u-pull-right">$15</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="imagenes/img-08.jpg" class="imagen-platillo u-full-width">
                    <div class="info-card">
                        <h4>Cuybrisket Hot</h4>
                        <p>Bebida ilimitada</p>
                        <img src="imagenes/clasificacion.png" width="25" >
                        <p class="precio">$30 <span class="u-pull-right">$18</span> </p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al carrito</a>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <footer class="footer"> 
        <div class="container">
            <div class="row">
                <div class="four columns">
                    <nav class="menu">
                        <a class="enlace" href="#">Pedidos a domicilio</a>
                        <a class="enlace" href="#">Pedidos en linea</a>
                        <a class="enlace" href="#">Pedidos por telefono</a>
                        <a class="enlace" href="#">Menu</a>
                        <a class="enlace" href="#">Bebidas</a>
                    </nav>
                </div>
                <div class="four columns">
                    <nav class="menu">
                        <a class="enlace" href="#">Restaurante</a>
                        <a class="enlace" href="#">Ubicacion</a>
                        <a class="enlace" href="#">Telefono</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    
</body>