<?php
require_once("db_connect.php");

class employee extends database_conn {

  // Methods
  function __construct(){
      parent::__construct("localhost","root","Admin@123","practice");
   }

  function get_employee_details($emp_id=0){
      if($emp_id){
         $query = "select * from employee_new WHERE id = $emp_id";
      }  
      else{
         $query = "select * from employee_new";
      }
      //echo $query;exit;
      $data = $this->fetch_data($query);
      return $data;
  }

  function get_all_employee_count(){
      $query = "select * from employee_new";
      
      //echo $query;exit;
      $data = $this->fetch_data_count($query);
      return $data;
  }
}

$obj = new employee();
print_r($obj->get_employee_details(2));
//print $obj->get_all_employee_count();
?>