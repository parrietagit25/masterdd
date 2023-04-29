<?php
require_once("Conexion.php");

class Usuario extends Conexion {
  private $conn;

  public function __construct() {
    $this->conn = $this->conectar();
  }

  public function obtenerUsuarios() {

    $result = $this->conn->query("SELECT * FROM usuarios");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  
  }

  public function eliminarUsuario($id) {
    $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    echo 'Usuario eliminado';
  }

  public function obtenerUsuario($id) {
    $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
  }

  public function autenticar($email, $password) {

    $result = $this->conn->query("SELECT count(*) as contar FROM usuarios WHERE email = '".$email."'");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($rows as $row) {
      $contar = $row['contar']; 
    }

    if ($contar > 0) {

      $result = $this->conn->query("SELECT * FROM usuarios WHERE email = '".$email."'");
      $rowss = $result->fetchAll(PDO::FETCH_ASSOC);

      foreach ($rowss as $row) {
        $pass = $row['password']; 
      }

      if (password_verify($password, $pass)) {
        return $rowss;
      }
    }

    return null;
  }

  function obtenerTodos($tabla) {

    $result = $this->conn->query("SELECT * FROM $tabla WHERE stat = 1");
    return $result->fetch_all(MYSQLI_ASSOC);

  }

  public function agregar($tabla, $datos) {

    $columnas = implode(", ", array_keys($datos));
    $placeholders = implode(", ", array_fill(0, count($datos), "?"));
    $sql = "INSERT INTO $tabla ($columnas) VALUES ($placeholders)";
    $stmt = $this->conn->prepare($sql);
    $tipos = str_repeat("s", count($datos));
    $params = array_merge([$tipos], array_values($datos));
    $tmp = array();
    foreach ($params as $key => $value) {
        $tmp[$key] = &$params[$key];
    }
    call_user_func_array([$stmt, 'bind_param'], $tmp);
    $resultado = $stmt->execute();
    echo 'Registro Realizados';
    return $resultado;
    
  }

  function actualizar($tabla, $id, $datos) {
    $set_values = "";
    $param_types = "";
    foreach ($datos as $column => $value) {
        $set_values .= "$column = ?, ";
        $param_types .= $this->get_param_type($value);
    }
    $set_values = rtrim($set_values, ", ");
    $sql = "UPDATE $tabla SET $set_values WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    
    $param_values = array_values($datos);
    $param_values[] = $id;
    $param_types .= "i"; // Assuming id is an integer

    $stmt->bind_param($param_types, ...$param_values);

    $resultado = $stmt->execute();
    echo 'Registro Actualizado';
    return $resultado;
  }

  function get_param_type($value) {
    if (is_integer($value)) {
        return "i";
    } elseif (is_double($value)) {
        return "d";
    } elseif (is_string($value)) {
        return "s";
    } else {
        return "b";
    }
  }

}
