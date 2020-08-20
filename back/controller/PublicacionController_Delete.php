<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\
include_once realpath('../facade/PublicacionFacade.php');


        $Usuario_idUsuario = strip_tags($_POST['Usuario_idUsuario']);
      
        PublicacionFacade::delete($usuario_idUsuario);
echo true;
  