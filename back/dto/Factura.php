<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Don´t call me gringo you f%&ing beanner  \\


class Factura {

  private $idFactura;
  private $totalFactura;
  private $fechaFactura;
  private $Usuario_idUsuario;

    /**
     * Constructor de Factura
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idFactura
     * @return idFactura
     */
  public function getIdFactura(){
      return $this->idFactura;
  }

    /**
     * Modifica el valor correspondiente a idFactura
     * @param idFactura
     */
  public function setIdFactura($idFactura){
      $this->idFactura = $idFactura;
  }
    /**
     * Devuelve el valor correspondiente a totalFactura
     * @return totalFactura
     */
  public function getTotalFactura(){
      return $this->totalFactura;
  }

    /**
     * Modifica el valor correspondiente a totalFactura
     * @param totalFactura
     */
  public function setTotalFactura($totalFactura){
      $this->totalFactura = $totalFactura;
  }
    /**
     * Devuelve el valor correspondiente a fechaFactura
     * @return fechaFactura
     */
  public function getFechaFactura(){
      return $this->fechaFactura;
  }

    /**
     * Modifica el valor correspondiente a fechaFactura
     * @param fechaFactura
     */
  public function setFechaFactura($fechaFactura){
      $this->fechaFactura = $fechaFactura;
  }
    /**
     * Devuelve el valor correspondiente a Usuario_idUsuario
     * @return Usuario_idUsuario
     */
  public function getUsuario_idUsuario(){
      return $this->Usuario_idUsuario;
  }

    /**
     * Modifica el valor correspondiente a Usuario_idUsuario
     * @param Usuario_idUsuario
     */
  public function setUsuario_idUsuario($usuario_idUsuario){
      $this->Usuario_idUsuario = $usuario_idUsuario;
  }


}
//That`s all folks!