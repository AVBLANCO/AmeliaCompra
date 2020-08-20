<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No es una cola ni es una pila, es tu proyecto que no compila  \\
include_once realpath('../facade/CategoriaFacade.php');




   
        $idcategoria = strip_tags($_POST['idcategoria']);
    
        CategoriaFacade::delete($idcategoria);
echo true;
  

 


//That`s all folks!