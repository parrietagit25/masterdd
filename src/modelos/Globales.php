<?php
require_once("Conexion.php");

class ModelGlobal extends Conexion {
  private $conn;

  public function __construct() {
    $this->conn = $this->conectar();
  }

  public function obtenerUsuarios() {

    $result = $this->conn->query("SELECT * FROM usuarios");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  
  }

  function obtenerTodos($tabla) {

    $result = $this->conn->query("SELECT * FROM $tabla WHERE stat = 1");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;

  }

  function obtener_codigo($tabla, $codigos){
    $result = $this->conn->query("SELECT * FROM $tabla WHERE codigo $codigos");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  /* Para mysql  */
  /*
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
    
  } */

  /* para sql server */

  public function agregar($tabla, $datos) {
    /*$columnas = implode(", ", array_keys($datos));
    $placeholders = implode(", ", array_fill(0, count($datos), "?"));
    $sql = "INSERT INTO $tabla ($columnas) VALUES ($placeholders)";
    $stmt = $this->conn->prepare($sql);
    $tipos = str_repeat("s", count($datos));
    $params = array_values($datos);
    
    for ($i = 0; $i < count($params); $i++) {
        $stmt->bindParam($i + 1, $params[$i]);
    }
    $resultado = $stmt->execute();
    if ($resultado) {
        echo 'Registro Realizado';
    } */
    
    $columnas = implode(", ", array_keys($datos));
    $params = "'" . implode("', '", array_values($datos)) . "'";
    $sql = "INSERT INTO $tabla ($columnas) VALUES ($params)";
    $insert = $this->conn->query($sql);

    $stmt = $this->conn->query(" SELECT TOP 1 id FROM $tabla ORDER BY id DESC");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $key => $value) {
      $ultimoIdInsertado = $value['id'];
    }
    return $ultimoIdInsertado;
  }

  public function sub_agregar($tabla, $datos) {
    $columnas = implode(", ", array_keys($datos));
    $params = "'" . implode("', '", array_values($datos)) . "'";
    $sql = "INSERT INTO $tabla ($columnas) VALUES ($params)";
    $insert = $this->conn->query($sql);

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
