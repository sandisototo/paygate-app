<?php
    include_once('lib/Question2.php');
    include_once('lib/BaseAnswer.php');

    class Answer2 extends BaseAnswer {
        private $usd_rate = 0;
        public function answer() {
            $q2 = new Question2();

            //todo: comment out after answering
            $q2->getInstructions();

            //Data to work with
            $data = $q2->getData();

            foreach ($data as $element) {
                //todo: your answer logic here
                $amount = (float)$this->getAmount($element);
                $currency = (string)trim($this->getCurrency($element));
                $rate = $q2->getZARConversionRate($currency);
                if ($currency === 'USD') {
                    $this->usd_rate = $rate;
                }
                $converted_amount = $this->convert($amount, $currency, $rate);
                $this->displayConversion($currency, $rate, $converted_amount);
            }
        }

        private function getAmount($element) {
            return explode(' ', $element )[1];
        }

        private function getCurrency($element) {
            return array_pop(explode('>', $element));
        }

        private function convert($amount, $currency, $rate) {
            $converted_amount = 0;
            if($currency === 'GBP') {
                $za_usd =  (float)$amount * $this->usd_rate;
                $converted_amount = (float)$za_usd * $rate;
            } else {
                $converted_amount = (float)$amount * $rate;
            }
            
            return number_format($converted_amount, 2);
        }
        
        private function displayConversion($currency, $rate, $converted_amount) {  
            echo '  Currency='.$currency;
            echo '  | Rate='.$rate;
            echo '  | Converted amount= R '.$converted_amount;
            echo '<br/>'; 
        }
    }