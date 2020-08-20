<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Y si mejor estudias comunicación?  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Producto.php');
require_once realpath('../dao/interfaz/IProductoDao.php');
require_once realpath('../dto/Foto.php');
require_once realpath('../dto/Categoria.php');

class ProductoFacade {

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
   * Crea un objeto Producto a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproducto
   * @param nombreProducto
   * @param cantidadProductoInventario
   * @param precioUnitarioProducto
   * @param descripcionProducto
   * @param calidadTipo
   * @param foto_idfoto
   * @param ubicacionProducto
   * @param categoria_idcategoria
   */
  public static function insert( $idproducto,  $nombreProducto,  $cantidadProductoInventario,  $precioUnitarioProducto,  $descripcionProducto,  $calidadTipo,  $foto_idfoto,  $ubicacionProducto,  $categoria_idcategoria){
      $producto = new Producto();
      $producto->setIdproducto($idproducto); 
      $producto->setNombreProducto($nombreProducto); 
      $producto->setCantidadProductoInventario($cantidadProductoInventario); 
      $producto->setPrecioUnitarioProducto($precioUnitarioProducto); 
      $producto->setDescripcionProducto($descripcionProducto); 
      $producto->setCalidadTipo($calidadTipo); 
      $producto->setFoto_idfoto($foto_idfoto); 
      $producto->setUbicacionProducto($ubicacionProducto); 
      $producto->setCategoria_idcategoria($categoria_idcategoria); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $rtn = $productoDao->insert($producto);
     $productoDao->close();
     return $rtn;
  }
  public static function insertProductoAdmin(  $nombreProducto,  $cantidadProductoInventario,  $precioUnitarioProducto,  $descripcionProducto,  $calidadTipo,   $ubicacionProducto,  $categoria_idcategoria){
      $producto = new Producto();
     
      $producto->setNombreProducto($nombreProducto); 
      $producto->setCantidadProductoInventario($cantidadProductoInventario); 
      $producto->setPrecioUnitarioProducto($precioUnitarioProducto); 
      $producto->setDescripcionProducto($descripcionProducto); 
      $producto->setCalidadTipo($calidadTipo); 
//      $producto->setFoto_idfoto($foto_idfoto); 
      $producto->setUbicacionProducto($ubicacionProducto); 
      $producto->setCategoria_idcategoria($categoria_idcategoria); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $rtn = $productoDao->insertProdAdministrador($producto);
     $productoDao->close();
     return $rtn;
  }
  public static function insertProductoCampesino( $nombreProducto,  $cantidadProductoInventario,   $descripcionProducto,   $ubicacionProducto){
      $producto = new Producto();

      $producto->setNombreProducto($nombreProducto); 
      $producto->setCantidadProductoInventario($cantidadProductoInventario); 
      $producto->setDescripcionProducto($descripcionProducto); 
      $producto->setUbicacionProducto($ubicacionProducto); 


     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $rtn = $productoDao->insertProdCampesino($producto);
     $productoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Producto de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproducto
   * @return El objeto en base de datos o Null
   */
  public static function select($idproducto){
      $producto = new Producto();
      $producto->setIdproducto($idproducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $result = $productoDao->select($producto);
     $productoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Producto  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproducto
   * @param nombreProducto
   * @param cantidadProductoInventario
   * @param precioUnitarioProducto
   * @param descripcionProducto
   * @param calidadTipo
   * @param foto_idfoto
   * @param ubicacionProducto
   * @param categoria_idcategoria
   */
  public static function update($idproducto, $nombreProducto, $cantidadProductoInventario, $precioUnitarioProducto, $descripcionProducto, $calidadTipo, $foto_idfoto, $ubicacionProducto, $categoria_idcategoria){
      $producto = self::select($idproducto);
      $producto->setNombreProducto($nombreProducto); 
      $producto->setCantidadProductoInventario($cantidadProductoInventario); 
      $producto->setPrecioUnitarioProducto($precioUnitarioProducto); 
      $producto->setDescripcionProducto($descripcionProducto); 
      $producto->setCalidadTipo($calidadTipo); 
      $producto->setFoto_idfoto($foto_idfoto); 
      $producto->setUbicacionProducto($ubicacionProducto); 
      $producto->setCategoria_idcategoria($categoria_idcategoria); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $productoDao->update($producto);
     $productoDao->close();
  }
  public static function updateAdmin(  $idproducto,$nombreProducto, $cantidadProductoInventario, $precioUnitarioProducto, $descripcionProducto, $calidadTipo, $ubicacionProducto, $Categoria_idcategoria){
//      $producto = self::select($idproducto);
//      $producto->setNombreProducto($nombreProducto); 
//      $producto->setCantidadProductoInventario($cantidadProductoInventario); 
//      $producto->setPrecioUnitarioProducto($precioUnitarioProducto); 
//      $producto->setDescripcionProducto($descripcionProducto); 
//      $producto->setCalidadTipo($calidadTipo); 
////      $producto->setFoto_idfoto($foto_idfoto); 
//      $producto->setUbicacionProducto($ubicacionProducto); 
//      $producto->setCategoria_idcategoria($categoria_idcategoria); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $productoDao->updateAdmin( $idproducto,$nombreProducto, $cantidadProductoInventario, $precioUnitarioProducto, $descripcionProducto, $calidadTipo, $ubicacionProducto, $Categoria_idcategoria);
     $productoDao->close();
  }
  public static function updateCampesino($idproducto, $nombreProducto, $cantidadProductoInventario,  $descripcionProducto, $ubicacionProducto){
//      $producto = self::select($idproducto);
//      $producto->setNombreProducto($nombreProducto); 
//      $producto->setCantidadProductoInventario($cantidadProductoInventario);       
//      $producto->setDescripcionProducto($descripcionProducto);      
//      $producto->setUbicacionProducto($ubicacionProducto);       

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $productoDao->updateCampesino($idproducto, $nombreProducto, $cantidadProductoInventario, $descripcionProducto, $ubicacionProducto);
     $productoDao->close();
  }

  /**
   * Elimina un objeto Producto de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproducto
   */
  public static function delete($idproducto){
      $producto = new Producto();
      $producto->setIdproducto($idproducto); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $productoDao->delete($producto);
     $productoDao->close();
  }

  /**
   * Lista todos los objetos Producto de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Producto en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $result = $productoDao->listAll();
     $productoDao->close();
     return $result;
  }
  public static function listAllById($id_tem){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $result = $productoDao->listAllById($id_tem);
     $productoDao->close();
     return $result;
  }
  public static function listAllByIdAdmin($id_tem){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productoDao =$FactoryDao->getproductoDao(self::getDataBaseDefault());
     $result = $productoDao->listAllByIdAdmin($id_tem);
     $productoDao->close();
     return $result;
  }


}
//That`s all folks!