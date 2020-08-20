<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/ProductoFacade.php');

//        $idproducto = "6";
//        $nombreProducto = "algo";
//        $cantidadProductoInventario = "200";
//        $descripcionProducto = "Algo se esta armando";
//        $ubicacionProducto = "Soledad";
        $idproducto = strip_tags($_POST['idproducto']);
        $nombreProducto = strip_tags($_POST['nombreProducto']);
        $cantidadProductoInventario = strip_tags($_POST['cantidadProductoInventario']);
        $descripcionProducto = strip_tags($_POST['descripcionProducto']);
        $ubicacionProducto = strip_tags($_POST['ubicacionProducto']);
        ProductoFacade::updateCampesino( $idproducto, $nombreProducto, $cantidadProductoInventario, $descripcionProducto, $ubicacionProducto);
echo true;
  