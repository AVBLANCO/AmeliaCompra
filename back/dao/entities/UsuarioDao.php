<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Y si mejor estudias comunicación?  \\

include_once realpath('../dao/interfaz/IUsuarioDao.php');
include_once realpath('../dto/Usuario.php');
include_once realpath('../dto/Tipousuario.php');

class UsuarioDao implements IUsuarioDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Usuario en la base de datos.
     * @param usuario objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($usuario){
      $idUsuario=$usuario->getIdUsuario();
$nombreUsuario=$usuario->getNombreUsuario();
$direccionUsuario=$usuario->getDireccionUsuario();
$correoUsuario=$usuario->getCorreoUsuario();
$telefonoUsuario=$usuario->getTelefonoUsuario();
$tipoUsuario_idtipoUsuario=$usuario->getTipoUsuario_idtipoUsuario()->getIdtipoUsuario();
$claveUsuario=$usuario->getClaveUsuario();

      try {
          $sql= "INSERT INTO `usuario`( `idUsuario`, `nombreUsuario`, `direccionUsuario`, `correoUsuario`, `telefonoUsuario`, `tipoUsuario_idtipoUsuario`, `claveUsuario`)"
          ."VALUES ('$idUsuario','$nombreUsuario','$direccionUsuario','$correoUsuario','$telefonoUsuario','$tipoUsuario_idtipoUsuario','$claveUsuario')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }
  public function registro($usuario){
//  $idUsuario=$usuario->getIdUsuario();
$nombreUsuario=$usuario->getNombreUsuario();
$direccionUsuario=$usuario->getDireccionUsuario();
$correoUsuario=$usuario->getCorreoUsuario();
$telefonoUsuario=$usuario->getTelefonoUsuario();
//$tipoUsuario_idtipoUsuario=$usuario->getTipoUsuario_idtipoUsuario()->getIdtipoUsuario();
$claveUsuario=$usuario->getClaveUsuario();


      try {
          $sql= "INSERT INTO `usuario`( `nombreUsuario`, `direccionUsuario`, `correoUsuario`, `telefonoUsuario`, `claveUsuario)"
          ."VALUES ($nombreUsuario', '$direccionUsuario', '$correoUsuario', '$telefonoUsuario','$claveUsuario')";
          
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($usuario){
      $idUsuario=$usuario->getIdUsuario();

      try {
          $sql= "SELECT `idUsuario`, `nombreUsuario`, `direccionUsuario`, `correoUsuario`, `telefonoUsuario`, `tipoUsuario_idtipoUsuario`, `claveUsuario`"
          ."FROM `usuario`"
          ."WHERE `idUsuario`='$idUsuario'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $usuario->setIdUsuario($data[$i]['idUsuario']);
          $usuario->setNombreUsuario($data[$i]['nombreUsuario']);
          $usuario->setDireccionUsuario($data[$i]['direccionUsuario']);
          $usuario->setCorreoUsuario($data[$i]['correoUsuario']);
          $usuario->setTelefonoUsuario($data[$i]['telefonoUsuario']);
           $tipousuario = new Tipousuario();
           $tipousuario->setIdtipoUsuario($data[$i]['tipoUsuario_idtipoUsuario']);
           $usuario->setTipoUsuario_idtipoUsuario($tipousuario);
          $usuario->setClaveUsuario($data[$i]['claveUsuario']);

          }
      return $usuario;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Usuario en la base de datos.
     * @param usuario objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($usuario){
      $idUsuario=$usuario->getIdUsuario();
$nombreUsuario=$usuario->getNombreUsuario();
$direccionUsuario=$usuario->getDireccionUsuario();
$correoUsuario=$usuario->getCorreoUsuario();
$telefonoUsuario=$usuario->getTelefonoUsuario();
$tipoUsuario_idtipoUsuario=$usuario->getTipoUsuario_idtipoUsuario()->getIdtipoUsuario();
$claveUsuario=$usuario->getClaveUsuario();

      try {
          $sql= "UPDATE `usuario` SET`idUsuario`='$idUsuario' ,`nombreUsuario`='$nombreUsuario' ,`direccionUsuario`='$direccionUsuario' ,`correoUsuario`='$correoUsuario' ,`telefonoUsuario`='$telefonoUsuario' ,`tipoUsuario_idtipoUsuario`='$tipoUsuario_idtipoUsuario' ,`claveUsuario`='$claveUsuario' WHERE `idUsuario`='$idUsuario' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($usuario){
      $idUsuario=$usuario->getIdUsuario();

      try {
          $sql ="DELETE FROM `usuario` WHERE `idUsuario`='$idUsuario'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @return ArrayList<Usuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idUsuario`, `nombreUsuario`, `direccionUsuario`, `correoUsuario`, `telefonoUsuario`, `tipoUsuario_idtipoUsuario`, `claveUsuario`"
          ."FROM `usuario`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $usuario= new Usuario();
          $usuario->setIdUsuario($data[$i]['idUsuario']);
          $usuario->setNombreUsuario($data[$i]['nombreUsuario']);
          $usuario->setDireccionUsuario($data[$i]['direccionUsuario']);
          $usuario->setCorreoUsuario($data[$i]['correoUsuario']);
          $usuario->setTelefonoUsuario($data[$i]['telefonoUsuario']);
           $tipousuario = new Tipousuario();
           $tipousuario->setIdtipoUsuario($data[$i]['tipoUsuario_idtipoUsuario']);
           $usuario->setTipoUsuario_idtipoUsuario($tipousuario);
          $usuario->setClaveUsuario($data[$i]['claveUsuario']);

          array_push($lista,$usuario);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }
  public function listAllById($id_tem){
      $lista = array();
      try {
          $sql ="SELECT `idUsuario`, `nombreUsuario`, `direccionUsuario`, `correoUsuario`, `telefonoUsuario`, `tipoUsuario_idtipoUsuario`, `claveUsuario`"
          ."FROM `usuario`"
          ."WHERE `idproducto`= '$id_tem'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $usuario= new Usuario();
          $usuario->setIdUsuario($data[$i]['idUsuario']);
          $usuario->setNombreUsuario($data[$i]['nombreUsuario']);
          $usuario->setDireccionUsuario($data[$i]['direccionUsuario']);
          $usuario->setCorreoUsuario($data[$i]['correoUsuario']);
          $usuario->setTelefonoUsuario($data[$i]['telefonoUsuario']);
           $tipousuario = new Tipousuario();
           $tipousuario->setIdtipoUsuario($data[$i]['tipoUsuario_idtipoUsuario']);
           $usuario->setTipoUsuario_idtipoUsuario($tipousuario);
          $usuario->setClaveUsuario($data[$i]['claveUsuario']);

          array_push($lista,$usuario);
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