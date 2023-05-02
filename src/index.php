<?php 

session_start();

if (!isset($_SESSION["usuario"])) {
  header("Location: login.php");
  exit();
}

require_once("controladores/CcClienteController.php");
$cCclienteController = new CcclienteController();

if (isset($_GET["view"])) {
    $view = $_GET["view"];
  
    switch ($view) {
      case "ver":
        require_once("vistas/usuarios.php");
        break;
      case "editar":
        require_once("vistas/editar_usuario.php");
        break;
      default:
        require_once("vistas/usuarios.php");
        break;
    }
  } else {
    $paises = $cCclienteController->obtener_pais();
    $genero = $cCclienteController->obtener_genero();
    $estado_civil = $cCclienteController->obtener_estado_civil();
    $profesion = $cCclienteController->obtener_profesion();
    $actividad_principal = $cCclienteController->obtener_actividad_principal();
    $actividad_otras = $cCclienteController->obtener_actividad_otras();
    $forma_pago = $cCclienteController->obtener_forma_pago();
    $limite = $cCclienteController->obtener_limite();
    $motodo_pago = $cCclienteController->obtener_motodo_pago();
    require_once("vistas/principal.php");
  }
  