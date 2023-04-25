<?php
class Conexion {
  private $host = "localhost";
  private $user = "root";
  private $password = "";
  private $database = "masterdd";

  protected function conectar() {
    $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
    return $conn;
  }

  public function desconectar($conn) {
    $conn->close();
  }
}
