<?php include_once('BaseQuestion.php');class Question1 extends BaseQuestion {public function getData() {$data = array();$dt = new DateTime();for ($i = 0; $i < 32 + mt_rand(1,25); $i++) {switch (mt_rand(0,5)) {case 0:$data[] = (mt_rand(1,100000) * 4);break;case 1:$data[] = (mt_rand(1,100000) * 2);break;case 2:$data[] = ((mt_rand(1,5)*10) + (mt_rand(1,5)*10) / 9);break;case 3:if (mt_rand(0,3) == 0) {$data[] = new DateTime();} else if (mt_rand(0,3) == 0) {$data[] = null;} else if (mt_rand(0,3) == 0) {$data[] = (bool) mt_rand(0,1);}break;case 4:$data[] = (mt_rand(1,1000) * 3);break;default:$data[] = ($this->generateRandomString(5 + mt_rand(1,5)));}}$data[] = $dt->format('Y-m-d');return $data;}public function getInstructions() {return include_once('questions/Q1.php');}private function generateRandomString($length) {$characters = '01234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz01234567890';$charactersLength = strlen($characters);$randomString = '';for ($i = 0; $i < $length; $i++) {$randomString .= $characters[mt_rand(0, $charactersLength - 1)];}return $randomString;}}