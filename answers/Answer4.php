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
                $json = json_decode($element, true);
                echo '<br/>';
                $this->muskCardNumber($json);
                $this->muskCvv($json);
                $this->hashPassword($json);
            }
        }

        private function muskCardNumber($json) {
            $number = $json['card']['cardNumber'];
            $musked = substr_replace($number, str_repeat("_", 3), 6, 6);
            echo '<B>Card:</b> '.$number.' => '.$musked;
            echo '<br/>';
            
        }

        private function muskCvv($json) {
            $cvv = $json['card']['cvv'];
            $musked_cvv = preg_replace('/\d/', '_', $cvv );
            echo '<B>CVV:</b> '.$cvv.' => '.$musked_cvv;
            echo '<br/>';        
        }

        private function hashPassword($json) {
            $password = $json['order']['customerDetails']['customer']['password'];
            $hashed_password = hash('sha256', $password);
            echo '<B>Password:</b> '.$password.' => '.$hashed_password;
            echo '<br/>';       
        }
    }