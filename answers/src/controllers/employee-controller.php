<?php
include_once('answers/src/models/employee-model.php');

class EmployeeController {
  public function get($con) {
    $empModel = new EmployeeModel($con);
    $query = "SELECT * from employee INNER JOIN project ON project.EMP_ID = employee.EMP_ID WHERE project.STATE = 'Pending' OR project.STATE = 'Initial'";

    try {
      return $empModel->select($query);
    }
    catch (Exception $ex) {
      print_r($ex);
    }
  }
}
?>