<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No es una cola ni es una pila, es tu proyecto que no compila  \\
include_once realpath('../facade/CategoriaFacade.php');







        $list=CategoriaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Categoria) {	
	       $rta.="{
	    \"idcategoria\":\"{$Categoria->getidcategoria()}\",
	    \"descripcionCategoria\":\"{$Categoria->getdescripcionCategoria()}\"
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