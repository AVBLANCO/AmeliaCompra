<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Eres capaz de hackear mi Facebook?  \\

include_once realpath('../dao/entities/CarritoDao.php');
include_once realpath('../dao/entities/CategoriaDao.php');
include_once realpath('../dao/entities/FacturaDao.php');
include_once realpath('../dao/entities/FotoDao.php');
include_once realpath('../dao/entities/ProductoDao.php');
include_once realpath('../dao/entities/PublicacionDao.php');
include_once realpath('../dao/entities/TipousuarioDao.php');
include_once realpath('../dao/entities/UsuarioDao.php');


interface IFactoryDao {
	
     /**
     * Devuelve una instancia de CarritoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CarritoDao
     */
     public function getCarritoDao($dbName);
     /**
     * Devuelve una instancia de CategoriaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CategoriaDao
     */
     public function getCategoriaDao($dbName);
     /**
     * Devuelve una instancia de FacturaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FacturaDao
     */
     public function getFacturaDao($dbName);
     /**
     * Devuelve una instancia de FotoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FotoDao
     */
     public function getFotoDao($dbName);
     /**
     * Devuelve una instancia de ProductoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProductoDao
     */
     public function getProductoDao($dbName);
     /**
     * Devuelve una instancia de PublicacionDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PublicacionDao
     */
     public function getPublicacionDao($dbName);
     /**
     * Devuelve una instancia de TipousuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TipousuarioDao
     */
     public function getTipousuarioDao($dbName);
     /**
     * Devuelve una instancia de UsuarioDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de UsuarioDao
     */
     public function getUsuarioDao($dbName);

}
//That`s all folks!