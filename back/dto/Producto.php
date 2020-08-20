<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Generar buen código o poner frases graciosas? ¡La frase! ¡La frase!  \\


class Producto {

  private $idproducto;
  private $nombreProducto;
  private $cantidadProductoInventario;
  private $precioUnitarioProducto;
  private $descripcionProducto;
  private $calidadTipo;
  private $foto_idfoto;
  private $ubicacionProducto;
  private $categoria_idcategoria;

    /**
     * Constructor de Producto
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idproducto
     * @return idproducto
     */
  public function getIdproducto(){
      return $this->idproducto;
  }

    /**
     * Modifica el valor correspondiente a idproducto
     * @param idproducto
     */
  public function setIdproducto($idproducto){
      $this->idproducto = $idproducto;
  }
    /**
     * Devuelve el valor correspondiente a nombreProducto
     * @return nombreProducto
     */
  public function getNombreProducto(){
      return $this->nombreProducto;
  }

    /**
     * Modifica el valor correspondiente a nombreProducto
     * @param nombreProducto
     */
  public function setNombreProducto($nombreProducto){
      $this->nombreProducto = $nombreProducto;
  }
    /**
     * Devuelve el valor correspondiente a cantidadProductoInventario
     * @return cantidadProductoInventario
     */
  public function getCantidadProductoInventario(){
      return $this->cantidadProductoInventario;
  }

    /**
     * Modifica el valor correspondiente a cantidadProductoInventario
     * @param cantidadProductoInventario
     */
  public function setCantidadProductoInventario($cantidadProductoInventario){
      $this->cantidadProductoInventario = $cantidadProductoInventario;
  }
    /**
     * Devuelve el valor correspondiente a precioUnitarioProducto
     * @return precioUnitarioProducto
     */
  public function getPrecioUnitarioProducto(){
      return $this->precioUnitarioProducto;
  }

    /**
     * Modifica el valor correspondiente a precioUnitarioProducto
     * @param precioUnitarioProducto
     */
  public function setPrecioUnitarioProducto($precioUnitarioProducto){
      $this->precioUnitarioProducto = $precioUnitarioProducto;
  }
    /**
     * Devuelve el valor correspondiente a descripcionProducto
     * @return descripcionProducto
     */
  public function getDescripcionProducto(){
      return $this->descripcionProducto;
  }

    /**
     * Modifica el valor correspondiente a descripcionProducto
     * @param descripcionProducto
     */
  public function setDescripcionProducto($descripcionProducto){
      $this->descripcionProducto = $descripcionProducto;
  }
    /**
     * Devuelve el valor correspondiente a calidadTipo
     * @return calidadTipo
     */
  public function getCalidadTipo(){
      return $this->calidadTipo;
  }

    /**
     * Modifica el valor correspondiente a calidadTipo
     * @param calidadTipo
     */
  public function setCalidadTipo($calidadTipo){
      $this->calidadTipo = $calidadTipo;
  }
    /**
     * Devuelve el valor correspondiente a foto_idfoto
     * @return foto_idfoto
     */
  public function getFoto_idfoto(){
      return $this->foto_idfoto;
  }

    /**
     * Modifica el valor correspondiente a foto_idfoto
     * @param foto_idfoto
     */
  public function setFoto_idfoto($foto_idfoto){
      $this->foto_idfoto = $foto_idfoto;
  }
    /**
     * Devuelve el valor correspondiente a ubicacionProducto
     * @return ubicacionProducto
     */
  public function getUbicacionProducto(){
      return $this->ubicacionProducto;
  }

    /**
     * Modifica el valor correspondiente a ubicacionProducto
     * @param ubicacionProducto
     */
  public function setUbicacionProducto($ubicacionProducto){
      $this->ubicacionProducto = $ubicacionProducto;
  }
    /**
     * Devuelve el valor correspondiente a categoria_idcategoria
     * @return categoria_idcategoria
     */
  public function getCategoria_idcategoria(){
      return $this->categoria_idcategoria;
  }

    /**
     * Modifica el valor correspondiente a categoria_idcategoria
     * @param categoria_idcategoria
     */
  public function setCategoria_idcategoria($categoria_idcategoria){
      $this->categoria_idcategoria = $categoria_idcategoria;
  }


}
//That`s all folks!