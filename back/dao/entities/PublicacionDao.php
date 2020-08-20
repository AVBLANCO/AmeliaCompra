<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando Gregorio Samsa se despertó una mañana después de un sueño intranquilo, se encontró sobre su cama convertido en un monstruoso insecto.  \\

include_once realpath('../dao/interfaz/IPublicacionDao.php');
include_once realpath('../dto/Publicacion.php');
include_once realpath('../dto/Usuario.php');
include_once realpath('../dto/Producto.php');

class PublicacionDao implements IPublicacionDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Publicacion en la base de datos.
     * @param publicacion objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($publicacion){
      $usuario_idUsuario=$publicacion->getUsuario_idUsuario()->getIdUsuario();
$producto_idproducto=$publicacion->getProducto_idproducto()->getIdproducto();
$fechaPublicacion=$publicacion->getFechaPublicacion();
$estado=$publicacion->getEstado();

      try {
          $sql= "INSERT INTO `publicacion`( `Usuario_idUsuario`, `producto_idproducto`, `fechaPublicacion`, `estado`)"
          ."VALUES ('$usuario_idUsuario','$producto_idproducto','$fechaPublicacion','$estado')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Publicacion en la base de datos.
     * @param publicacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($publicacion){
      $usuario_idUsuario=$publicacion->getUsuario_idUsuario()->getIdUsuario();
$producto_idproducto=$publicacion->getProducto_idproducto()->getIdproducto();

      try {
          $sql= "SELECT `Usuario_idUsuario`, `producto_idproducto`, `fechaPublicacion`, `estado`"
          ."FROM `publicacion`"
          ."WHERE `Usuario_idUsuario`='$usuario_idUsuario' AND`producto_idproducto`='$producto_idproducto'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $publicacion->setUsuario_idUsuario($usuario);
           $producto = new Producto();
           $producto->setIdproducto($data[$i]['producto_idproducto']);
           $publicacion->setProducto_idproducto($producto);
          $publicacion->setFechaPublicacion($data[$i]['fechaPublicacion']);
          $publicacion->setEstado($data[$i]['estado']);

          }
      return $publicacion;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Publicacion en la base de datos.
     * @param publicacion objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($publicacion){
      $usuario_idUsuario=$publicacion->getUsuario_idUsuario()->getIdUsuario();
$producto_idproducto=$publicacion->getProducto_idproducto()->getIdproducto();
$fechaPublicacion=$publicacion->getFechaPublicacion();
$estado=$publicacion->getEstado();

      try {
          $sql= "UPDATE `publicacion` SET`Usuario_idUsuario`='$usuario_idUsuario' ,`producto_idproducto`='$producto_idproducto' ,`fechaPublicacion`='$fechaPublicacion' ,`estado`='$estado' WHERE `Usuario_idUsuario`='$usuario_idUsuario' AND `producto_idproducto`='$producto_idproducto' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Publicacion en la base de datos.
     * @param publicacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($publicacion){
      $usuario_idUsuario=$publicacion->getUsuario_idUsuario()->getIdUsuario();
$producto_idproducto=$publicacion->getProducto_idproducto()->getIdproducto();

      try {
          $sql ="DELETE FROM `publicacion` WHERE `Usuario_idUsuario`='$usuario_idUsuario' AND`producto_idproducto`='$producto_idproducto'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Publicacion en la base de datos.
     * @return ArrayList<Publicacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `Usuario_idUsuario`, `producto_idproducto`, `fechaPublicacion`, `estado`"
          ."FROM `publicacion`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $publicacion= new Publicacion();
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $publicacion->setUsuario_idUsuario($usuario);
           $producto = new Producto();
           $producto->setIdproducto($data[$i]['producto_idproducto']);
           $publicacion->setProducto_idproducto($producto);
          $publicacion->setFechaPublicacion($data[$i]['fechaPublicacion']);
          $publicacion->setEstado($data[$i]['estado']);

          array_push($lista,$publicacion);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Publicacion en la base de datos.
     * @param publicacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Publicacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByUsuario_idUsuario($publicacion){
      $lista = array();
      $usuario_idUsuario=$publicacion->getUsuario_idUsuario()->getIdUsuario();

      try {
          $sql ="SELECT `Usuario_idUsuario`, `producto_idproducto`, `fechaPublicacion`, `estado`"
          ."FROM `publicacion`"
          ."WHERE `Usuario_idUsuario`='$usuario_idUsuario'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $publicacion = new Publicacion();
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $publicacion->setUsuario_idUsuario($usuario);
           $producto = new Producto();
           $producto->setIdproducto($data[$i]['producto_idproducto']);
           $publicacion->setProducto_idproducto($producto);
          $publicacion->setFechaPublicacion($data[$i]['fechaPublicacion']);
          $publicacion->setEstado($data[$i]['estado']);

          array_push($lista,$publicacion);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Publicacion en la base de datos.
     * @param publicacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Publicacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByProducto_idproducto($publicacion){
      $lista = array();
      $producto_idproducto=$publicacion->getProducto_idproducto()->getIdproducto();

      try {
          $sql ="SELECT `Usuario_idUsuario`, `producto_idproducto`, `fechaPublicacion`, `estado`"
          ."FROM `publicacion`"
          ."WHERE `producto_idproducto`='$producto_idproducto'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $publicacion = new Publicacion();
           $usuario = new Usuario();
           $usuario->setIdUsuario($data[$i]['Usuario_idUsuario']);
           $publicacion->setUsuario_idUsuario($usuario);
           $producto = new Producto();
           $producto->setIdproducto($data[$i]['producto_idproducto']);
           $publicacion->setProducto_idproducto($producto);
          $publicacion->setFechaPublicacion($data[$i]['fechaPublicacion']);
          $publicacion->setEstado($data[$i]['estado']);

          array_push($lista,$publicacion);
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