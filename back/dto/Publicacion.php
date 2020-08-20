<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En lo que a mí respecta, señor Dix, lo imprevisto no existe  \\


class Publicacion {

  private $Usuario_idUsuario;
  private $producto_idproducto;
  private $fechaPublicacion;
  private $estado;

    /**
     * Constructor de Publicacion
    */
     public function __construct(){}

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
    /**
     * Devuelve el valor correspondiente a producto_idproducto
     * @return producto_idproducto
     */
  public function getProducto_idproducto(){
      return $this->producto_idproducto;
  }

    /**
     * Modifica el valor correspondiente a producto_idproducto
     * @param producto_idproducto
     */
  public function setProducto_idproducto($producto_idproducto){
      $this->producto_idproducto = $producto_idproducto;
  }
    /**
     * Devuelve el valor correspondiente a fechaPublicacion
     * @return fechaPublicacion
     */
  public function getFechaPublicacion(){
      return $this->fechaPublicacion;
  }

    /**
     * Modifica el valor correspondiente a fechaPublicacion
     * @param fechaPublicacion
     */
  public function setFechaPublicacion($fechaPublicacion){
      $this->fechaPublicacion = $fechaPublicacion;
  }
    /**
     * Devuelve el valor correspondiente a estado
     * @return estado
     */
  public function getEstado(){
      return $this->estado;
  }

    /**
     * Modifica el valor correspondiente a estado
     * @param estado
     */
  public function setEstado($estado){
      $this->estado = $estado;
  }


}
//That`s all folks!