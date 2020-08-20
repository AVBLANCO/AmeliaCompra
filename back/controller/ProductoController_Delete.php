<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/ProductoFacade.php');

        $idproducto = strip_tags($_POST['idproducto']);
    
        ProductoFacade::delete($idproducto);
echo true;
  