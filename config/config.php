<?php

class Database{
 
  private $host = "localhost";
  private $db_name = "NOMBRE_DE_LA_BD";
  private $db_user = "root";
  private $db_pwd = "CONTRASENA";
  public $vcon = "";
  
  public function ConnectionDB(){
     $this->vcon = null;
      
      try{
              $this->vcon = new PDO("mysql:host=" . $this->host . ";db_name=" . $this->db_name, $this->db_user, $this->db_pwd);
              $this->vcon->exec("set name utf8");
            }catch(PDOException $e){
              echo "Error: " . $e->getMessage();
            }
      return $this->vcon;
    }
  
}
?>