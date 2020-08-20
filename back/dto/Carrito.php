<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Vaya! ¡Al fin harás algo mejor que una calculadora!  \\


class Carrito {

  private $producto_idproducto;
  private $precio;
  private $cantidad;
  private $subTotal;
  private $fechaProductoUsuario;
  private $idCarrito;
  private $Factura_idFactura;

    /**
     * Constructor de Carrito
    */
     public function __construct(){}

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
     * Devuelve el valor correspondiente a precio
     * @return precio
     */
  public function getPrecio(){
      return $this->precio;
  }

    /**
     * Modifica el valor correspondiente a precio
     * @param precio
     */
  public function setPrecio($precio){
      $this->precio = $precio;
  }
    /**
     * Devuelve el valor correspondiente a cantidad
     * @return cantidad
     */
  public function getCantidad(){
      return $this->cantidad;
  }

    /**
     * Modifica el valor correspondiente a cantidad
     * @param cantidad
     */
  public function setCantidad($cantidad){
      $this->cantidad = $cantidad;
  }
    /**
     * Devuelve el valor correspondiente a subTotal
     * @return subTotal
     */
  public function getSubTotal(){
      return $this->subTotal;
  }

    /**
     * Modifica el valor correspondiente a subTotal
     * @param subTotal
     */
  public function setSubTotal($subTotal){
      $this->subTotal = $subTotal;
  }
    /**
     * Devuelve el valor correspondiente a fechaProductoUsuario
     * @return fechaProductoUsuario
     */
  public function getFechaProductoUsuario(){
      return $this->fechaProductoUsuario;
  }

    /**
     * Modifica el valor correspondiente a fechaProductoUsuario
     * @param fechaProductoUsuario
     */
  public function setFechaProductoUsuario($fechaProductoUsuario){
      $this->fechaProductoUsuario = $fechaProductoUsuario;
  }
    /**
     * Devuelve el valor correspondiente a idCarrito
     * @return idCarrito
     */
  public function getIdCarrito(){
      return $this->idCarrito;
  }

    /**
     * Modifica el valor correspondiente a idCarrito
     * @param idCarrito
     */
  public function setIdCarrito($idCarrito){
      $this->idCarrito = $idCarrito;
  }
    /**
     * Devuelve el valor correspondiente a Factura_idFactura
     * @return Factura_idFactura
     */
  public function getFactura_idFactura(){
      return $this->Factura_idFactura;
  }

    /**
     * Modifica el valor correspondiente a Factura_idFactura
     * @param Factura_idFactura
     */
  public function setFactura_idFactura($factura_idFactura){
      $this->Factura_idFactura = $factura_idFactura;
  }


}
//That`s all folks!