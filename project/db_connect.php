<?php
class database_conn {
  // Properties
  public $host;
  public $user;
  public $password;
  public $db;
  public $conn;
  public $server_name;

  // Methods
  function __construct($h,$u,$p,$d){
    $this->conn = mysqli_connect($h,$u,$p,$d);
  }

  function db_connect($h,$u,$p,$d){
    $this->conn = mysqli_connect($h,$u,$p,$d);
  }

  function fire_query($query){
     $result = mysqli_query($this->conn, $query);
     if($result){
        return true;
     }
     else{
        //write some log
        return false;
     }
  }


  function fetch_data($query){
     $out = array(); 
     $result = mysqli_query($this->conn, $query);
     if($result){
        while($row = mysqli_fetch_assoc($result)){
          $out[] = $row;   
        }
     }
     else{
        //write some log
        return false;
     }
     return $out;
  }

    function fetch_data_count($query){

     $out = array(); 
     $result = mysqli_query($this->conn, $query);
     if($result){
        return mysqli_num_rows($result);
     }
     else{
        //write some log
        return false;
     }
     return $out;
  }

      /*public function __set($name, $value) 
      {
         //echo "$name, $value";exit;
         $this->$name = "hello";
      }
      */
}
//$connection = new database_conn("localhost","root","Admin@123","practice");
?>