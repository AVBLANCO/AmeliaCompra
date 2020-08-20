<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/ProductoFacade.php');


      
//
        $nombreProducto = strip_tags($_POST['nombreProducto']);
        $cantidadProductoInventario = strip_tags($_POST['cantidadProductoInventario']);
        $descripcionProducto = strip_tags($_POST['descripcionProducto']);
        $ubicacionProducto = strip_tags($_POST['ubicacionProducto']);

        $success=0;
      $success=ProductoFacade::insertProductoCampesino($nombreProducto, $cantidadProductoInventario, $descripcionProducto, $ubicacionProducto);
        
//        ProductoFacade::insertProductoCampesino( $idproducto,$nombreProducto, $cantidadProductoInventario, $descripcionProducto, $ubicacionProducto);
//        
        if ($success > 0) {
                $success=1;
            } else {
                $success;
            }
      
echo "1";
  