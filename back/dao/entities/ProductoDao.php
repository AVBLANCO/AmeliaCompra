<?php

/*
  -------Creado por-------
  \(x.x )/ Anarchy \( x.x)/
  ------------------------
 */

//    ¡Santos frameworks Batman!  \\

include_once realpath('../dao/interfaz/IProductoDao.php');
include_once realpath('../dto/Producto.php');
include_once realpath('../dto/Foto.php');
include_once realpath('../dto/Categoria.php');

class ProductoDao implements IProductoDao {

    private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
        $this->cn = $conexion;
    }

    /**
     * Guarda un objeto Producto en la base de datos.
     * @param producto objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function insert($producto) {
        $idproducto = $producto->getIdproducto();
        $nombreProducto = $producto->getNombreProducto();
        $cantidadProductoInventario = $producto->getCantidadProductoInventario();
        $precioUnitarioProducto = $producto->getPrecioUnitarioProducto();
        $descripcionProducto = $producto->getDescripcionProducto();
        $calidadTipo = $producto->getCalidadTipo();
        $foto_idfoto = $producto->getFoto_idfoto()->getIdfoto();
        $ubicacionProducto = $producto->getUbicacionProducto();
        $categoria_idcategoria = $producto->getCategoria_idcategoria()->getIdcategoria();

        try {
            $sql = "INSERT INTO `producto`( `idproducto`, `nombreProducto`, `cantidadProductoInventario`, `precioUnitarioProducto`, `descripcionProducto`, `calidadTipo`, `foto_idfoto`, `ubicacionProducto`, `categoria_idcategoria`)"
                    . "VALUES ('$idproducto','$nombreProducto','$cantidadProductoInventario','$precioUnitarioProducto','$descripcionProducto','$calidadTipo','$foto_idfoto','$ubicacionProducto','$categoria_idcategoria')";
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }

    public function insertProdCampesino($producto) {       
        $nombreProducto = $producto->getNombreProducto();
        $cantidadProductoInventario = $producto->getCantidadProductoInventario();       
        $descripcionProducto = $producto->getDescripcionProducto();
        $ubicacionProducto = $producto->getUbicacionProducto();
        try {
            $sql = "INSERT INTO `producto`(  `nombreProducto`, `cantidadProductoInventario`,  `descripcionProducto`,   `ubicacionProducto`)"
                    . "VALUES ('$nombreProducto','$cantidadProductoInventario','$descripcionProducto','$ubicacionProducto')";
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }

    public function insertProdAdministrador($producto) {    
        $nombreProducto = $producto->getNombreProducto();
        $cantidadProductoInventario = $producto->getCantidadProductoInventario();
        $precioUnitarioProducto = $producto->getPrecioUnitarioProducto();
        $descripcionProducto = $producto->getDescripcionProducto();
        $calidadTipo = $producto->getCalidadTipo();       
        $ubicacionProducto = $producto->getUbicacionProducto();
        $categoria_idcategoria = $producto->getCategoria_idcategoria()->getIdcategoria();

        try {
            $sql = "INSERT INTO `producto`(   `nombreProducto`, `cantidadProductoInventario`, `precioUnitarioProducto`, `descripcionProducto`, `calidadTipo`, `ubicacionProducto`, `categoria_idcategoria`)"
                    . "VALUES ('$nombreProducto','$cantidadProductoInventario','$precioUnitarioProducto','$descripcionProducto',' $calidadTipo', '$ubicacionProducto', ' $categoria_idcategoria')";
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }

    /**
     * Busca un objeto Producto en la base de datos.
     * @param producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function select($producto) {
        $idproducto = $producto->getIdproducto();

        try {
            $sql = "SELECT `idproducto`, `nombreProducto`, `cantidadProductoInventario`, `precioUnitarioProducto`, `descripcionProducto`, `calidadTipo`, `foto_idfoto`, `ubicacionProducto`, `categoria_idcategoria`"
                    . "FROM `producto`"
                    . "WHERE `idproducto`='$idproducto'";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $producto->setIdproducto($data[$i]['idproducto']);
                $producto->setNombreProducto($data[$i]['nombreProducto']);
                $producto->setCantidadProductoInventario($data[$i]['cantidadProductoInventario']);
                $producto->setPrecioUnitarioProducto($data[$i]['precioUnitarioProducto']);
                $producto->setDescripcionProducto($data[$i]['descripcionProducto']);
                $producto->setCalidadTipo($data[$i]['calidadTipo']);
                $foto = new Foto();
                $foto->setIdfoto($data[$i]['foto_idfoto']);
                $producto->setFoto_idfoto($foto);
                $producto->setUbicacionProducto($data[$i]['ubicacionProducto']);
                $categoria = new Categoria();
                $categoria->setIdcategoria($data[$i]['categoria_idcategoria']);
                $producto->setCategoria_idcategoria($categoria);
            }
            return $producto;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    /**
     * Modifica un objeto Producto en la base de datos.
     * @param producto objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function update($producto) {
        $idproducto = $producto->getIdproducto();
        $nombreProducto = $producto->getNombreProducto();
        $cantidadProductoInventario = $producto->getCantidadProductoInventario();
        $precioUnitarioProducto = $producto->getPrecioUnitarioProducto();
        $descripcionProducto = $producto->getDescripcionProducto();
        $calidadTipo = $producto->getCalidadTipo();
        $foto_idfoto = $producto->getFoto_idfoto()->getIdfoto();
        $ubicacionProducto = $producto->getUbicacionProducto();
        $categoria_idcategoria = $producto->getCategoria_idcategoria()->getIdcategoria();

        try {
            $sql = "UPDATE `producto` SET`idproducto`='$idproducto' ,`nombreProducto`='$nombreProducto' ,`cantidadProductoInventario`='$cantidadProductoInventario' ,`precioUnitarioProducto`='$precioUnitarioProducto' ,`descripcionProducto`='$descripcionProducto' ,`calidadTipo`='$calidadTipo' ,`foto_idfoto`='$foto_idfoto' ,`ubicacionProducto`='$ubicacionProducto' ,`categoria_idcategoria`='$categoria_idcategoria' WHERE `idproducto`='$idproducto' ";
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }
    public function updateAdmin( $idproducto,$nombreProducto, $cantidadProductoInventario, $precioUnitarioProducto, $descripcionProducto, $calidadTipo, $ubicacionProducto, $Categoria_idcategoria) {
//        $idproducto = $producto->getIdproducto();
//        $nombreProducto = $producto->getNombreProducto();
//        $cantidadProductoInventario = $producto->getCantidadProductoInventario();
//        $precioUnitarioProducto = $producto->getPrecioUnitarioProducto();
//        $descripcionProducto = $producto->getDescripcionProducto();
//        $calidadTipo = $producto->getCalidadTipo();
////        $foto_idfoto = $producto->getFoto_idfoto()->getIdfoto();
//        $ubicacionProducto = $producto->getUbicacionProducto();
//        $categoria_idcategoria = $producto->getCategoria_idcategoria()->getIdcategoria();

        try {
            $sql = "UPDATE `producto` SET` `nombreProducto`='$nombreProducto' ,`cantidadProductoInventario`='$cantidadProductoInventario' ,`precioUnitarioProducto`='$precioUnitarioProducto' ,`descripcionProducto`='$descripcionProducto' ,`calidadTipo`='$calidadTipo'  ,`ubicacionProducto`='$ubicacionProducto' ,`categoria_idcategoria`='$Categoria_idcategoria' WHERE `idproducto`='$idproducto' ";
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }
    public function updateCampesino($idproducto, $nombreProducto, $cantidadProductoInventario, $descripcionProducto, $ubicacionProducto) {
//        $idproducto = $producto->getIdproducto();
//        $nombreProducto = $producto->getNombreProducto();
//        $cantidadProductoInventario = $producto->getCantidadProductoInventario();    
//        $descripcionProducto = $producto->getDescripcionProducto(); 
//        $ubicacionProducto = $producto->getUbicacionProducto();       

        try {
            $sql = "UPDATE `producto` SET `nombreProducto`='$nombreProducto' ,`cantidadProductoInventario`='$cantidadProductoInventario'  ,`descripcionProducto`='$descripcionProducto' ,`ubicacionProducto`='$ubicacionProducto'  WHERE `idproducto`='$idproducto' ";
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }

    /**
     * Elimina un objeto Producto en la base de datos.
     * @param producto objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function delete($producto) {
        $idproducto = $producto->getIdproducto();

        try {
            $sql = "DELETE FROM `producto` WHERE `idproducto`='$idproducto'";
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }

    /**
     * Busca un objeto Producto en la base de datos.
     * @return ArrayList<Producto> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function listAll() {
        $lista = array();
        try {
            $sql = "SELECT `idproducto`, `nombreProducto`, `cantidadProductoInventario`, `precioUnitarioProducto`, `precioVenta`, `descripcionProducto`, `calidadTipo`, `ubicacionProducto`, categoria.descripcionCategoria AS `categoria_idcategoria` FROM `producto`
INNER JOIN categoria
ON categoria.idcategoria=categoria_idcategoria WHERE 1";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $producto = new Producto();
                $producto->setIdproducto($data[$i]['idproducto']);
                $producto->setNombreProducto($data[$i]['nombreProducto']);
                $producto->setCantidadProductoInventario($data[$i]['cantidadProductoInventario']);
                $producto->setPrecioUnitarioProducto($data[$i]['precioUnitarioProducto']);
                $producto->setDescripcionProducto($data[$i]['descripcionProducto']);
                $producto->setCalidadTipo($data[$i]['calidadTipo']);
//           $foto = new Foto();
//           $foto->setIdfoto($data[$i]['foto_idfoto']);
//           $producto->setFoto_idfoto($foto);
                $producto->setUbicacionProducto($data[$i]['ubicacionProducto']);
                $categoria = new Categoria();
                $categoria->setIdcategoria($data[$i]['categoria_idcategoria']);
                $producto->setCategoria_idcategoria($categoria);

                array_push($lista, $producto);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }
    public function listAllById($id_tem) {
        $lista = array();
        try {
            $sql = "SELECT `idproducto`, `nombreProducto`, `cantidadProductoInventario`, `precioUnitarioProducto`, `descripcionProducto`, `calidadTipo`,  `ubicacionProducto`, `categoria_idcategoria`"
                    . "FROM `producto`"
                    . "WHERE  `idproducto`= '$id_tem'";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $producto = new Producto();
                $producto->setIdproducto($data[$i]['idproducto']);
                $producto->setNombreProducto($data[$i]['nombreProducto']);
                $producto->setCantidadProductoInventario($data[$i]['cantidadProductoInventario']);
                $producto->setPrecioUnitarioProducto($data[$i]['precioUnitarioProducto']);
                $producto->setDescripcionProducto($data[$i]['descripcionProducto']);
                $producto->setCalidadTipo($data[$i]['calidadTipo']);
//           $foto = new Foto();
//           $foto->setIdfoto($data[$i]['foto_idfoto']);
//           $producto->setFoto_idfoto($foto);
                $producto->setUbicacionProducto($data[$i]['ubicacionProducto']);
                $categoria = new Categoria();
                $categoria->setIdcategoria($data[$i]['categoria_idcategoria']);
                $producto->setCategoria_idcategoria($categoria);

                array_push($lista, $producto);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }
    public function listAllByIdAdmin($id_tem) {
        $lista = array();
        try {
            $sql = "SELECT `idproducto`, `nombreProducto`, `cantidadProductoInventario`, `precioUnitarioProducto`, `descripcionProducto`, `calidadTipo`,  `ubicacionProducto`, `categoria_idcategoria`"
                    . "FROM `producto`"
                    . "WHERE  `idproducto`= '$id_tem'";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $producto = new Producto();
                $producto->setIdproducto($data[$i]['idproducto']);
                $producto->setNombreProducto($data[$i]['nombreProducto']);
                $producto->setCantidadProductoInventario($data[$i]['cantidadProductoInventario']);
                $producto->setPrecioUnitarioProducto($data[$i]['precioUnitarioProducto']);
                $producto->setDescripcionProducto($data[$i]['descripcionProducto']);
                $producto->setCalidadTipo($data[$i]['calidadTipo']);
//           $foto = new Foto();
//           $foto->setIdfoto($data[$i]['foto_idfoto']);
//           $producto->setFoto_idfoto($foto);
                $producto->setUbicacionProducto($data[$i]['ubicacionProducto']);
                $categoria = new Categoria();
                $categoria->setIdcategoria($data[$i]['categoria_idcategoria']);
                $producto->setCategoria_idcategoria($categoria);

                array_push($lista, $producto);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    public function insertarConsulta($sql) {
        $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sentencia = $this->cn->prepare($sql);
        $sentencia->execute();
        $sentencia = null;
        return $this->cn->lastInsertId();
    }

    public function ejecutarConsulta($sql) {
        $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sentencia = $this->cn->prepare($sql);
        $sentencia->execute();
        $data = $sentencia->fetchAll();
        $sentencia = null;
        return $data;
    }

    /**
     * Cierra la conexión actual a la base de datos
     */
    public function close() {
        $cn = null;
    }

}

//That`s all folks!