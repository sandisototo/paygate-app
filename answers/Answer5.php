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
            echo '<br/>';

            //todo: your answer logic here
            //todo: do a POST and a GET to the url above as per instructions
            $this->doAction($url, 'post');
            $this->doAction($url, 'get');
        }

        private function doAction($url, $action) {
            echo 'Doing <b>'.$action.'</b> http method.';
            echo '<br/>';
            $result = $this->callService($url, $action);
            echo 'Results:';
            echo '<br/>';
            print_r($result);
           
            $code = (int)$this->getCode($result);
            echo '<br/>';
            echo '  code:'.$code;
            $description = (string)$this->getDescription($result);
            echo '<br/>';
            echo '  description:'.$description;
            echo '<br/>';
            echo '<br/>';
           
        }

        private function callService($url, $action) {
            $data = array('action' => $action);
            $options = array(
                    'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data),
                )
            );

            try {
                $context  = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                return $result;
            } catch (exception $ex) {
                echo 'ERROR while making a '.$action.' request::'.$ex.getMessage();
            }
        }

        private function getCode($result) {
            return explode(',', $result)[0];
        }

        private function getDescription($result) {
            return explode(',', $result )[1];
        }
    }