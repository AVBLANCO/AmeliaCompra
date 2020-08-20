<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cuantas frases como esta crees que puedo escribir?  \\
include_once realpath('../facade/FacturaFacade.php');


        $idFactura = strip_tags($_POST['idFactura']);
        
        FacturaFacade::delete($idFactura);
echo true;
    
//That`s all folks!