<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\


class Foto {

  private $idfoto;
  private $descripcion;
  private $rutaAlmacenamiento;
  private $fotoFormato;
  private $nombreFoto;
  private $opcionFoto;

    /**
     * Constructor de Foto
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idfoto
     * @return idfoto
     */
  public function getIdfoto(){
      return $this->idfoto;
  }

    /**
     * Modifica el valor correspondiente a idfoto
     * @param idfoto
     */
  public function setIdfoto($idfoto){
      $this->idfoto = $idfoto;
  }
    /**
     * Devuelve el valor correspondiente a descripcion
     * @return descripcion
     */
  public function getDescripcion(){
      return $this->descripcion;
  }

    /**
     * Modifica el valor correspondiente a descripcion
     * @param descripcion
     */
  public function setDescripcion($descripcion){
      $this->descripcion = $descripcion;
  }
    /**
     * Devuelve el valor correspondiente a rutaAlmacenamiento
     * @return rutaAlmacenamiento
     */
  public function getRutaAlmacenamiento(){
      return $this->rutaAlmacenamiento;
  }

    /**
     * Modifica el valor correspondiente a rutaAlmacenamiento
     * @param rutaAlmacenamiento
     */
  public function setRutaAlmacenamiento($rutaAlmacenamiento){
      $this->rutaAlmacenamiento = $rutaAlmacenamiento;
  }
    /**
     * Devuelve el valor correspondiente a fotoFormato
     * @return fotoFormato
     */
  public function getFotoFormato(){
      return $this->fotoFormato;
  }

    /**
     * Modifica el valor correspondiente a fotoFormato
     * @param fotoFormato
     */
  public function setFotoFormato($fotoFormato){
      $this->fotoFormato = $fotoFormato;
  }
    /**
     * Devuelve el valor correspondiente a nombreFoto
     * @return nombreFoto
     */
  public function getNombreFoto(){
      return $this->nombreFoto;
  }

    /**
     * Modifica el valor correspondiente a nombreFoto
     * @param nombreFoto
     */
  public function setNombreFoto($nombreFoto){
      $this->nombreFoto = $nombreFoto;
  }
    /**
     * Devuelve el valor correspondiente a opcionFoto
     * @return opcionFoto
     */
  public function getOpcionFoto(){
      return $this->opcionFoto;
  }

    /**
     * Modifica el valor correspondiente a opcionFoto
     * @param opcionFoto
     */
  public function setOpcionFoto($opcionFoto){
      $this->opcionFoto = $opcionFoto;
  }


}
//That`s all folks!