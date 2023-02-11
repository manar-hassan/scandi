<?php
require_once('DB.php');

abstract class con implements DB{
  private $serverName;
  private $dbUser;
  private $dbPassword;
  private $dbName;
  
  public function connect(){
    $this->serverName="localhost";
    $this->dbUser="root";
    $this->dbPassword="";
    $this->dbName="product";

    $con=new mysqli($this->serverName,$this->dbUser,$this->dbPassword,$this->dbName);
      return $con;
  }
}

?>