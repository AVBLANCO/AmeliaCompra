
<?php

session_start();

include_once '../dto/Usuario.php';
include_once '../dao/entities/UsuarioDao.php';

$user = new Usuario();

$correo = $_POST['inputEmail'];
$user->setCorreo($correo);

$contra = $_POST['inputPassword'];

//$hash = password_hash($password, PASSWORD_BCRYPT); 
$salt = 'amelia';
//$password=md5($salt,$password);
$mipassword = md5($salt . $contra);

$user->setpassword($mipassword);


$daousuario = new Usuario_DAO();

$resul = $daousuario->AgregarUsuario($user);

if ($resul) {

    echo 'conectado';
    location:"Form/FormLogin.php";
    echo '<script type="text/javascript">    
                     
             alert("¡registro exitosa!  ");
              window.location="../index.php"
                </script>';
} else {

    echo 'problemas con el servidor ';
    echo'<script type="text/javascript">
                alert("¡ERROR! Usuario o Contraseña Invalidos , ");
                window.location="./index.php"
                  window.location="../Form/FormRegistrarUsuario.php"
                </script>';

//              echo'<script type="text/javascript">
//                alert("¡ERROR!  ");
//              
//                </script>';
//              
}
?>
 