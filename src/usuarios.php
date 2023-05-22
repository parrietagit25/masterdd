<?php 

session_start();

if (!isset($_SESSION["usuario"])) {
  header("Location: login.php");
  exit();
}

require_once("controladores/UsuarioController.php");
$usuariosControllers = new UsuarioController();

if (isset($_POST['registro_usuario'])) {
    $datos = $_POST;  
    unset($datos['registro_usuario']);
    $id_usuario = $usuariosControllers->agregar_usuario($datos);
    $alerta = 1;
}

if (isset($_GET['id_eliminar'])) {
    $usuariosControllers->eliminarUsuario($_GET['id_eliminar']);
    $alerta = 2;
}

    $view = $_GET["view"];
  
    switch ($view) {
      case "ver_usuarios":
        $todos_registros_user = $usuariosControllers->obtenerUsuarios();
        $tipos = $usuariosControllers->tiposUsuarios();
        require_once("vistas/usuarios.php");
        break;
      case "crear":
        require_once("vistas/editar_usuario.php");
        break;
      default:
        require_once("vistas/usuarios.php");
        break;
    }
  