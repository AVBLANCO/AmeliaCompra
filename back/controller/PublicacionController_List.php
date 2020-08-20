<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\
include_once realpath('../facade/PublicacionFacade.php');


        $list=PublicacionFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Publicacion) {	
	       $rta.="{
	    \"Usuario_idUsuario_idUsuario\":\"{$Publicacion->getUsuario_idUsuario()->getidUsuario()}\",
	    \"producto_idproducto_idproducto\":\"{$Publicacion->getproducto_idproducto()->getidproducto()}\",
	    \"fechaPublicacion\":\"{$Publicacion->getfechaPublicacion()}\",
	    \"estado\":\"{$Publicacion->getestado()}\"
	       },";
        }

        if($rta!=""){
	       $rta = substr($rta, 0, -1);
	       $msg="{\"msg\":\"exito\"}";
        }else{
	       $msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	       $rta="{\"result\":\"No se encontraron registros.\"}";	
        }
       echo "[{$msg},{$rta}]";

//That`s all folks!