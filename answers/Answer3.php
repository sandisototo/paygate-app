<?php
    include_once('lib/Question3.php');
    include_once('lib/BaseAnswer.php');

    class Answer3 extends BaseAnswer {
        public function answer() {
            $q3 = new Question3();

            //todo: comment out after answering
            $q3->getInstructions();

            // Side note: Parse and Fatal errors are not recoverable.
            register_shutdown_function('Answer3::shutdown');
            set_error_handler('Answer3::handler');

            for($i = 0; $i < 6; $i++) {
                try {
                    $q3->getData();
                    echo '<br/><br/>';
                }
                catch (Exception $ex) {
                   echo 'Handled exception:: ERROR:'.$ex->getMessage();
                }

                $this->shutdown();
            }
        }

        // Making sure it's public
        public static function shutdown() {
           // Get error
           $error = error_get_last();
           if(isset($error)) {
                // Invoke error handler
                static::handler($error['type'], $error['message'], $error['file'], $error['line']);
           }
        }

        public static function handler($type, $message, $file, $line) {
            // Custom message
            echo 'Handled core:: Error in file: '.$file.' at line '.$line.' with type error: '.$type.' and message: '.$message;
        }
    }