<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/ProductoFacade.php');



//       $idproducto = "2";
//       $nombreProducto = "mandarina";
//       $cantidadProductoInventario = "3400";
//       $precioUnitarioProducto = "3200";
//       $descripcionProducto = "limon tahiti";
//       $calidadTipo = "tipo exportacion";
//       $ubicacionProducto ="convencion norte de santander ";
//       $categoria_idcategoria = "2";
////       $categoria= new Categoria();
//      $categoria->setIdcategoria($Categoria_idcategoria);
        $idproducto = strip_tags($_POST['idproducto']);
        $nombreProducto = strip_tags($_POST['nombreProducto']);
        $cantidadProductoInventario = strip_tags($_POST['cantidadProductoInventario']);
        $precioUnitarioProducto = strip_tags($_POST['precioUnitarioProducto']);
        $descripcionProducto = strip_tags($_POST['descripcionProducto']);
        $calidadTipo = strip_tags($_POST['calidadTipo']);
        $ubicacionProducto = strip_tags($_POST['ubicacionProducto']);
        $Categoria_idcategoria = strip_tags($_POST['categoria_idcategoria']);
//        $categoria= new Categoria();
//        $categoria->setIdcategoria($Categoria_idcategoria);
        ProductoFacade::updateAdmin( $idproducto,$nombreProducto, $cantidadProductoInventario, $precioUnitarioProducto, $descripcionProducto, $calidadTipo, $ubicacionProducto,  $Categoria_idcategoria);
echo true;
  