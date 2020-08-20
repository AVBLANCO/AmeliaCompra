<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\
include_once realpath('../facade/FotoFacade.php');



        $idfoto = strip_tags($_POST['idfoto']);
    
        FotoFacade::delete($idfoto);
echo true;
   