<?php
    include_once('lib/Question2.php');
    include_once('lib/BaseAnswer.php');

    class Answer2 extends BaseAnswer {
        public function answer() {
            $q2 = new Question2();

            //todo: comment out after answering
            $q2->getInstructions();

            //Data to work with
            $data = $q2->getData();

            foreach ($data as $element) {
                //todo: remove after answering
                print_r($element);
                echo '<br/>';

                //todo: your answer logic here
            }
        }
    }