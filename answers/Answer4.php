<?php
    include_once('lib/Question4.php');
    include_once('lib/BaseAnswer.php');

    class Answer4 extends BaseAnswer {
        public function answer() {
            $q4 = new Question4();

            //todo: comment out after answering
            $q4->getInstructions();

            //Data to work with
            $data = $q4->getData();

            foreach ($data as $element) {
                //todo: remove when answering
                print_r($element);
                echo '<br/>';

                //todo: your answer logic here
            }
        }
    }