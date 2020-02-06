<?php
    error_reporting(1);
	ini_set("display_errors",1);

    require_once 'class/Connection.php';

    class Alternatives {

        public function insertQuestAlt($params = array()) {

            /*$sql_insert = "INSERT INTO question_alternative QUESTION_NUMBER, DESC_QUESTION_ALT, ALTERNATIVE_A, ALTERNATIVE_B,
                          ALTERNATIVE_C, ALTERNATIVE_D, ALTERNATIVE_E, ALTERNATIVE_F, ALTERNATIVE_G, ALT_CORRECT VALUES 
                          (:num_question_alt, :question_alt, :alternativeA, :alternativeB, :alternativeC, :alternativeD, 
                          :alternativeE, :alternativeF, :alternativeG, :correctAlt)";

            $stmt->execute(array(':num_question_alt' => $num_question_alt, ':question_alt' => $question_alt, ':alternativeA' => $alternativeA,
                                 ':alternativeB' => $alternativeB, ':alternativeC' => $alternativeC, ':alternativeD' => $alternativeD,
                                 ':alternativeE' => $alternativeE, ':alternativeF' => $alternativeF, ':alternativeG' => $alternativeG,
                                 ':correctAlt' => $correctAlt));

            $stmt = Connection::prepare($sql_insert);*/

            foreach ($params as $key => $value) {

                $num_question_alt = $params[$key]['num_question_alt'];
                $question_alt = $params[$key]['question_alt'];
                $alternativeA = $params[$key]['alternativaA'];
                $alternativeB = $params[$key]['alternativaB'];
                $alternativeC = $params[$key]['alternativaC'];
                $alternativeD = $params[$key]['alternativaD'];
                $alternativeE = $params[$key]['alternativaE'];
                $alternativeF = $params[$key]['alternativaF'];
                $alternativeG = $params[$key]['alternativaG'];
                $correctAlt = $params[$key]['alt_correta'];

                $array = array(':num_question_alt' => $num_question_alt, ':question_alt' => $question_alt, ':alternativeA' => $alternativeA,
                                ':alternativeB' => $alternativeB, ':alternativeC' => $alternativeC, ':alternativeD' => $alternativeD,
                                ':alternativeE' => $alternativeE, ':alternativeF' => $alternativeF, ':alternativeG' => $alternativeG,
                                ':correctAlt' => $correctAlt);

                                print_r($array);

                
            }

        }


    }

?>