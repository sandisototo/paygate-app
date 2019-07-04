<?php
    include_once('lib/Question5.php');
    include_once('lib/BaseAnswer.php');

    class Answer5 extends BaseAnswer {
        public function answer() {
            $q5 = new Question5();

            //todo: comment out after answering
            $q5->getInstructions();

            //Url to work with
            $url = $q5->getData();

            //todo: remove when answering
            print_r($url);
            echo '<br/>';

            //todo: your answer logic here
            //todo: do a POST and a GET to the url above as per instructions
        }
    }