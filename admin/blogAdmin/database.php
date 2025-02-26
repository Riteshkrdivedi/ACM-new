<?php

class Database
{
  private $server;
  private $username;
  private $password;
  private $database;
  private $port;

  public function connect()
  {
    include(__DIR__.'/../../enviornment.php');
    // $env_server = "localhost:3306";
    // $env_username = "root";
    // $env_password = "";
    // $env_database = "acmbackend";
    // $env_port = "3306";
    
    $this->server = $env_server;
    $this->username = $env_username;
    $this->password = $env_password;
    $this->database = $env_database;
    $this->port = $env_port;
    
    $conn = new mysqli($this->server, $this->username, $this->password, $this->database, $this->port);
    return $conn;
  }
}
?>