<?php
class Conexion {

  private $server;
  private $database;
  //private $username = 'AD\pedro.arrieta'; 
  //private $password = 'Dollar2022'; 

  public function __construct(){
    $this->server = 'PCRID239\SQLEXPRESS';  
    $this->database = 'masterdd';
  }

  public function conectar() {

    $conn = "";

    try {
        $connectionString = "odbc:Driver={SQL Server};Server=PEDRO\SQLEXPRESS;Database=masterdd;Trusted_Connection=yes;";
        $conn = new PDO($connectionString);
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }

    return $conn;

  }

  public function desconectar($conn) {
    $conn->close();
  }

}
