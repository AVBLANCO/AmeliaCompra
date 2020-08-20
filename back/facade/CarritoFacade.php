<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me arreglas mi impresora?  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Carrito.php');
require_once realpath('../dao/interfaz/ICarritoDao.php');
require_once realpath('../dto/Producto.php');
require_once realpath('../dto/Factura.php');

class CarritoFacade {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Carrito a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param producto_idproducto
   * @param precio
   * @param cantidad
   * @param subTotal
   * @param fechaProductoUsuario
   * @param idCarrito
   * @param factura_idFactura
   */
  public static function insert( $producto_idproducto,  $precio,  $cantidad,  $subTotal,  $fechaProductoUsuario,  $idCarrito,  $factura_idFactura){
      $carrito = new Carrito();
      $carrito->setProducto_idproducto($producto_idproducto); 
      $carrito->setPrecio($precio); 
      $carrito->setCantidad($cantidad); 
      $carrito->setSubTotal($subTotal); 
      $carrito->setFechaProductoUsuario($fechaProductoUsuario); 
      $carrito->setIdCarrito($idCarrito); 
      $carrito->setFactura_idFactura($factura_idFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $carritoDao =$FactoryDao->getcarritoDao(self::getDataBaseDefault());
     $rtn = $carritoDao->insert($carrito);
     $carritoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Carrito de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCarrito
   * @return El objeto en base de datos o Null
   */
  public static function select($idCarrito){
      $carrito = new Carrito();
      $carrito->setIdCarrito($idCarrito); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $carritoDao =$FactoryDao->getcarritoDao(self::getDataBaseDefault());
     $result = $carritoDao->select($carrito);
     $carritoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Carrito  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param producto_idproducto
   * @param precio
   * @param cantidad
   * @param subTotal
   * @param fechaProductoUsuario
   * @param idCarrito
   * @param factura_idFactura
   */
  public static function update($producto_idproducto, $precio, $cantidad, $subTotal, $fechaProductoUsuario, $idCarrito, $factura_idFactura){
      $carrito = self::select($idCarrito);
      $carrito->setProducto_idproducto($producto_idproducto); 
      $carrito->setPrecio($precio); 
      $carrito->setCantidad($cantidad); 
      $carrito->setSubTotal($subTotal); 
      $carrito->setFechaProductoUsuario($fechaProductoUsuario); 
      $carrito->setFactura_idFactura($factura_idFactura); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $carritoDao =$FactoryDao->getcarritoDao(self::getDataBaseDefault());
     $carritoDao->update($carrito);
     $carritoDao->close();
  }

  /**
   * Elimina un objeto Carrito de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCarrito
   */
  public static function delete($idCarrito){
      $carrito = new Carrito();
      $carrito->setIdCarrito($idCarrito); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $carritoDao =$FactoryDao->getcarritoDao(self::getDataBaseDefault());
     $carritoDao->delete($carrito);
     $carritoDao->close();
  }

  /**
   * Lista todos los objetos Carrito de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Carrito en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $carritoDao =$FactoryDao->getcarritoDao(self::getDataBaseDefault());
     $result = $carritoDao->listAll();
     $carritoDao->close();
     return $result;
  }


}
//That`s all folks!