<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    In Anarchy we trust  \\
include_once realpath('../facade/CarritoFacade.php');


        $Producto_idproducto = strip_tags($_POST['producto_idproducto']);
       
        CarritoFacade::delete($Producto_idproducto);
echo true;
    