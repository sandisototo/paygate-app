<?php
include_once('./../../../lib/Question6.php');
include_once('./../../../lib/BaseAnswer.php');

class DB {
  private $connection = null;
  private $pdo = null;
  private $stmt = null;

  function __construct(){
    try {
      $q6 = new Question6();
      var_dump($q6);
      $this->connection = $q6.getConnection();
      print_r($this->connection);
      $data = $q6.getData();
      print_r($data);
      die('Hi');
    
    } catch (Exception $ex) { die($ex->getMessage()); }
  }

  function __destruct(){
    if ($this->stmt!==null) { $this->stmt = null; }
    if ($this->pdo!==null) { $this->pdo = null; }
  }

  function select($sql, $cond=null){
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
      $result = $this->stmt->fetchAll();
    } catch (Exception $ex) { die($ex->getMessage()); }
    $this->stmt = null;
    return $result;
  }
}
?>