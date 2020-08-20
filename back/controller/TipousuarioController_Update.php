<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En un lugar de La Mancha, de cuyo nombre no quiero acordarme...  \\
include_once realpath('../facade/TipousuarioFacade.php');



        $idtipoUsuario = strip_tags($_POST['idtipoUsuario']);
        $descripcioTipoUsuario = strip_tags($_POST['descripcioTipoUsuario']);
        TipousuarioFacade::update($idtipoUsuario, $descripcioTipoUsuario);
echo true;
   