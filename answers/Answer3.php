<?php
    include_once('lib/Question3.php');
    include_once('lib/BaseAnswer.php');

    class Answer3 extends BaseAnswer {
        public function answer() {
            $q3 = new Question3();

            //todo: comment out after answering
            $q3->getInstructions();

            for($i = 0; $i < 6; $i++) {
                //Data to work with
                $q3->getData();

                //todo: your answer logic here
                //todo: make sure no errors are displayed on screen
            }
        }
    }