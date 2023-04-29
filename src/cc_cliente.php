<?php 

session_start();

if (!isset($_SESSION["usuario"])) {
  header("Location: login.php");
  exit();
}

require_once("controladores/CcClienteController.php");
$usuarioController = new CcclienteController();

if (isset($_POST['registro_cc_cliente'])) {
    $datos = $_POST;  
    unset($datos['registro_cc_cliente']);
    $usuarioController->agregar_cc_cliente($datos);
}

if (isset($_GET["view"])) {
    $view = $_GET["view"];
  
    switch ($view) {
      case "cc_cliente_natural": 
        //$usuarios = $usuarioController->obtenerUsuarios();
        //$tipos = $usuarioController->obtenerTipos();
        require_once("vistas/cc_cliente_natural.php");
        break;
      case "requisitos_debida_diligencia":
        require_once("vistas/requisitos_debida_diligencia.php");
        break;
      default:
        $usuarios = $usuarioController->obtenerUsuarios();
        require_once("vistas/usuarios.php");
        break;
    }

  } else {
    $usuarios = $usuarioController->obtenerUsuarios();
    require_once("vistas/principal.php");
  }
  