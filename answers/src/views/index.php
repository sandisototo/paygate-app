<!DOCTYPE htm>
<html>
<body>
<ul>
<?php
  require "./../models/database.php";
  require "./../controllers/employees.php";
  $employees = new Employees();
  foreach ($employees->get() as $u) {
    echo "<li>" . $u['name'] . "</li>";
  }
?></ul>
</body>
</html>