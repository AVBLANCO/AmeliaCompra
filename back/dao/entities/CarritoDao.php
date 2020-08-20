<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    They call me Mr. Espagueti  \\

include_once realpath('../dao/interfaz/ICarritoDao.php');
include_once realpath('../dto/Carrito.php');
include_once realpath('../dto/Producto.php');
include_once realpath('../dto/Factura.php');

class CarritoDao implements ICarritoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Carrito en la base de datos.
     * @param carrito objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($carrito){
      $producto_idproducto=$carrito->getProducto_idproducto()->getIdproducto();
$precio=$carrito->getPrecio();
$cantidad=$carrito->getCantidad();
$subTotal=$carrito->getSubTotal();
$fechaProductoUsuario=$carrito->getFechaProductoUsuario();
$idCarrito=$carrito->getIdCarrito();
$factura_idFactura=$carrito->getFactura_idFactura()->getIdFactura();

      try {
          $sql= "INSERT INTO `carrito`( `producto_idproducto`, `precio`, `cantidad`, `subTotal`, `fechaProductoUsuario`, `idCarrito`, `Factura_idFactura`)"
          ."VALUES ('$producto_idproducto','$precio','$cantidad','$subTotal','$fechaProductoUsuario','$idCarrito','$factura_idFactura')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Carrito en la base de datos.
     * @param carrito objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($carrito){
      $idCarrito=$carrito->getIdCarrito();

      try {
          $sql= "SELECT `producto_idproducto`, `precio`, `cantidad`, `subTotal`, `fechaProductoUsuario`, `idCarrito`, `Factura_idFactura`"
          ."FROM `carrito`"
          ."WHERE `idCarrito`='$idCarrito'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $producto = new Producto();
           $producto->setIdproducto($data[$i]['producto_idproducto']);
           $carrito->setProducto_idproducto($producto);
          $carrito->setPrecio($data[$i]['precio']);
          $carrito->setCantidad($data[$i]['cantidad']);
          $carrito->setSubTotal($data[$i]['subTotal']);
          $carrito->setFechaProductoUsuario($data[$i]['fechaProductoUsuario']);
          $carrito->setIdCarrito($data[$i]['idCarrito']);
           $factura = new Factura();
           $factura->setIdFactura($data[$i]['Factura_idFactura']);
           $carrito->setFactura_idFactura($factura);

          }
      return $carrito;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Carrito en la base de datos.
     * @param carrito objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($carrito){
      $producto_idproducto=$carrito->getProducto_idproducto()->getIdproducto();
$precio=$carrito->getPrecio();
$cantidad=$carrito->getCantidad();
$subTotal=$carrito->getSubTotal();
$fechaProductoUsuario=$carrito->getFechaProductoUsuario();
$idCarrito=$carrito->getIdCarrito();
$factura_idFactura=$carrito->getFactura_idFactura()->getIdFactura();

      try {
          $sql= "UPDATE `carrito` SET`producto_idproducto`='$producto_idproducto' ,`precio`='$precio' ,`cantidad`='$cantidad' ,`subTotal`='$subTotal' ,`fechaProductoUsuario`='$fechaProductoUsuario' ,`idCarrito`='$idCarrito' ,`Factura_idFactura`='$factura_idFactura' WHERE `idCarrito`='$idCarrito' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Carrito en la base de datos.
     * @param carrito objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($carrito){
      $idCarrito=$carrito->getIdCarrito();

      try {
          $sql ="DELETE FROM `carrito` WHERE `idCarrito`='$idCarrito'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Carrito en la base de datos.
     * @return ArrayList<Carrito> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `producto_idproducto`, `precio`, `cantidad`, `subTotal`, `fechaProductoUsuario`, `idCarrito`, `Factura_idFactura`"
          ."FROM `carrito`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $carrito= new Carrito();
           $producto = new Producto();
           $producto->setIdproducto($data[$i]['producto_idproducto']);
           $carrito->setProducto_idproducto($producto);
          $carrito->setPrecio($data[$i]['precio']);
          $carrito->setCantidad($data[$i]['cantidad']);
          $carrito->setSubTotal($data[$i]['subTotal']);
          $carrito->setFechaProductoUsuario($data[$i]['fechaProductoUsuario']);
          $carrito->setIdCarrito($data[$i]['idCarrito']);
           $factura = new Factura();
           $factura->setIdFactura($data[$i]['Factura_idFactura']);
           $carrito->setFactura_idFactura($factura);

          array_push($lista,$carrito);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That`s all folks!