<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\
include_once realpath('../facade/UsuarioFacade.php');



        $idUsuario = strip_tags($_POST['idUsuario']);
        
        UsuarioFacade::delete($idUsuario);
echo true;


  


//That`s all folks!