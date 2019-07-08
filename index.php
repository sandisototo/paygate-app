<?php
    include_once('lib/path.php');

    $qNo = ((!empty($_GET['q'])) ? filter_var($_GET['q'], FILTER_SANITIZE_NUMBER_INT): 0);
    $aCalled = 'Unknown';

    //Runner for questions 1 - 5
    if (($qNo >= 0) && ($qNo <= 5)) {
        include_once('answers/Answer'.$qNo.'.php');
        $class = 'Answer'.$qNo;
        /* @var $obj BaseAnswer */
        $obj = new $class;
        echo $obj->answer();

    } else if ($qNo == 6) {// Runner for question 6
        include_once('lib/Question6.php');
        $q6 = new Question6();

        //Instructions to question 6
        //==================================================================================================================
        //todo: comment out after answering
        $q6->getInstructions();
        //==================================================================================================================

        //Do not remove
        /* @var $connection Connection */
        $connection = $q6->getConnection();

        //Do not remove
        //setting up data
        $q6->setup($connection);

        print_r($q6->getData());
        $url = $q6->getData();
        //Answer invocation to question 6
        //==================================================================================================================
        ini_set('display_errors', true);
        include_once("answers/src/controllers/employee-controller.php");
        $empController = new EmployeeController();
        $emps = $empController->get($connection);

        echo '<table id="tbId" class="tdCl" style="width:100%">
             <thead>
              <tr>
                <th>Emp ID</th>
                <th>Employee</th> 
                <th>Occupation</th>
                <th>Project</th>
                <th>Description</th>
                <th>State</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($emps as $emp) {
                echo '
                <tr>
                    <td>'.$emp["EMP_ID"].'</td>
                    <td>'.$emp["EMP_NAME"].' '.$emp["EMP_SURNAME"].'</td>
                    <td>'.$emp["EMP_TITLE"].'</td>
                    <td>'.$emp["ID"].' '.$emp["TITLE"].'</td>
                    <td>'.$emp["DESCRIPTION"].'</td>
                    <td>'.$emp["STATE"].'</td>
                </tr>';

            }
        echo '</tbody>
            </table>';

        echo '<div class="footer"><center><p>footer...</p></center></div>';
        echo '<input id="actionInput" type="hidden" action="done" url="'.$url.'">';
        echo '<button id="btnDone" type="button" class="btn">Done</button>';
        //End of invocation
        //==================================================================================================================
    } else if ($qNo == 99) {
        include_once('questions/baseQ.php');
    } else {
        die('Unknown Question Number');
    }

    echo '<script type="text/javascript" src="assets/js/master.js"></script>';