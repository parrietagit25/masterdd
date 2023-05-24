<?php
class Conexion {

  private $server;
  private $database;
  private $username;
  private $password;

  public function __construct() {
      $this->server = 'localhost'; // Cambia a la dirección del servidor MySQL
      $this->database = 'masterdd'; // Cambia al nombre de tu base de datos
      $this->username = 'root'; // Cambia al nombre de usuario de tu base de datos
      $this->password = ''; // Cambia a la contraseña de tu base de datos
  }

  public function conectar() {
      $conn = null;

      try {
          //$conn = new PDO("mysql:host={$this->server};dbname=dbglmd0nhlfimi", 'u7tutx9cpc5lf', 'Chicho1787$$$');
          //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $connectionString = "odbc:Driver={SQL Server};Server=PCRID239\SQLEXPRESS;Database=masterdd;Trusted_Connection=yes;";
          $conn = new PDO($connectionString);
          //echo "Conexión exitosa a la base de datos MySQL.";
      } catch (PDOException $e) {
          echo "Error de conexión: " . $e->getMessage();
      }

      return $conn;
  }

  public function desconectar($conn) {
      $conn = null;
  }


  /*
  $tipo_base_datos = 1;

  if ($tipo_base_datos == 2) {

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

  }elseif($tipo_base_datos == 1){

    private $server;
    private $database;
    private $username;
    private $password;

    public function __construct() {
        $this->server = 'localhost'; // Cambia a la dirección del servidor MySQL
        $this->database = 'masterdd'; // Cambia al nombre de tu base de datos
        $this->username = 'root'; // Cambia al nombre de usuario de tu base de datos
        $this->password = ''; // Cambia a la contraseña de tu base de datos
    }

    public function conectar() {
        $conn = null;

        try {
            $conn = new PDO("mysql:host={$this->server};dbname={$this->database}", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa a la base de datos MySQL.";
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }

        return $conn;
    }

    public function desconectar($conn) {
        $conn = null;
    }

} */

}
