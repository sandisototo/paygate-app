<?php
include_once('./../models/database.php');

class Employees extends DB {
  function get(){
    return $this->select("SELECT * FROM `employees`");
  }
}
?>