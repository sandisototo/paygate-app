<?php
    include_once('lib/Question1.php');
    include_once('lib/BaseAnswer.php');

    class Answer1 extends BaseAnswer {
        private $lastOne;
        private $noStr = 'no';

        public function answer() {
            $q1 = new Question1();

            //todo: comment out after answering
            $q1->getInstructions();

            //Data to work with
            $data = $q1->getData();
            $this->lastOne = end($data);
            foreach ($data as $element) {
                //todo: your answer logic here
                // print_r($element);
                $this->process($element);
                echo '<br/>';

            }
        }

        private function process($el) {
            switch ($el) {
                case !empty($el) && $el instanceof DateTime: //isDate
                    $this->formatDate($el);
                    break;
                case !empty($el) &&  ctype_digit($el): //isNumber
                    $this->isDivisible($el);
                    break;
                case !empty($el) &&  is_float($el): // isDouble
                    $this->displayFloat($el);
                    break;
                case !empty($el) && $el ===  $this->lastOne:
                    $this->constructedDate($el);
                    break;
                default:
                echo '--->'.$this->noStr;
            }
        }

        private function isDivisible($el) {
            if($el % 4 !== 0) {
                echo '--->Divisible';
            } else {
                echo '--->'.$this->noStr;
            }
        }
        
        private function formatDate($el) {
            if($el) {
                '--->Date: '.$el->format('Y-m-d');
            } else {
                echo '--->'.$this->noStr;
            }
        }
        
        private function displayFloat($el) {
            echo  '--->Amount: '. round($el, 2);
        }

        private function constructedDate($el) {
            $date = $date=date_create($el);
            echo  '--->Date Construct: '. date_format($date, 'Y-m-d h:i:sa');
        }
    }