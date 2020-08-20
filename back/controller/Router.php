<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No te olvides de quitar mis comentarios  \\
include_once realpath('CarritoController.php');
include_once realpath('CategoriaController.php');
include_once realpath('FacturaController.php');
include_once realpath('FotoController.php');
include_once realpath('ProductoController.php');
include_once realpath('PublicacionController.php');
include_once realpath('TipousuarioController.php');
include_once realpath('UsuarioController.php');

$ruta = strip_tags($_POST['ruta']);
    	$rtn = "";
    	switch ($ruta) {
           case 'CarritoInsert':
    			$rtn = CarritoController::insert();
    			break;
    		case 'CarritoList':
    			$rtn = CarritoController::listAll();
    			break;
           case 'CategoriaInsert':
    			$rtn = CategoriaController::insert();
    			break;
    		case 'CategoriaList':
    			$rtn = CategoriaController::listAll();
    			break;
           case 'FacturaInsert':
    			$rtn = FacturaController::insert();
    			break;
    		case 'FacturaList':
    			$rtn = FacturaController::listAll();
    			break;
           case 'FotoInsert':
    			$rtn = FotoController::insert();
    			break;
    		case 'FotoList':
    			$rtn = FotoController::listAll();
    			break;
           case 'ProductoInsert':
    			$rtn = ProductoController::insert();
    			break;
    		case 'ProductoList':
    			$rtn = ProductoController::listAll();
    			break;
           case 'PublicacionInsert':
    			$rtn = PublicacionController::insert();
    			break;
    		case 'PublicacionList':
    			$rtn = PublicacionController::listAll();
    			break;
           case 'TipousuarioInsert':
    			$rtn = TipousuarioController::insert();
    			break;
    		case 'TipousuarioList':
    			$rtn = TipousuarioController::listAll();
    			break;
           case 'UsuarioInsert':
    			$rtn = UsuarioController::insert();
    			break;
    		case 'UsuarioList':
    			$rtn = UsuarioController::listAll();
    			break;
    		default:
    			$rtn="404 Ruta no encontrada.";
    			break;
    	}

echo $rtn;

//That`s all folks!