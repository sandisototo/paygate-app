<?php
class EmployeeModel {
  private $connection = null;
  private $pdo = null;

  function __construct($con){
    try {
      $this->connection = $con;
    } catch (Exception $ex) { die($ex->getMessage()); }
  }

  function __destruct(){
    if ($this->connection!==null) { $this->connection = null; }
    if ($this->pdo!==null) { $this->pdo = null; }
  }

  function select($sql){
    $result = null;
    try {
      $result = $this->connection->executeSelect($sql);
    } catch (Exception $ex) { die($ex->getMessage()); }
    return $result;
  }
}
?>