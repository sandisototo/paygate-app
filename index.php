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


        //Answer invocation to question 6
        //==================================================================================================================
        //todo: invoke your mvc answer to questions 6
        //todo: you can use whatever method to implement the invocation of your answer
        //End of invocation
        //==================================================================================================================
    } else if ($qNo == 99) {
        include_once('questions/baseQ.php');
    } else {
        die('Unknown Question Number');
    }