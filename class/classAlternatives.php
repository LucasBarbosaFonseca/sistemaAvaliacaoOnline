<?php
    error_reporting(1);
	ini_set("display_errors",1);

    require_once 'class/Connection.php';

    class Alternatives {

        public function insertQuestAlt($params = array()) {

            //echo '<pre>'.print_r($params).'</pre>';

            $sql_insert = "INSERT INTO question_alternative (QUESTION_NUMBER, DESC_QUESTION_ALT, ALTERNATIVE_A, ALTERNATIVE_B,
                          ALTERNATIVE_C, ALTERNATIVE_D, ALTERNATIVE_E, ALTERNATIVE_F, ALTERNATIVE_G, ALT_CORRECT) VALUES 
                          (:num_question_alt, :question_alt, :alternativeA, :alternativeB, :alternativeC, :alternativeD, 
                          :alternativeE, :alternativeF, :alternativeG, :correctAlt)";

            $stmt = Connection::prepare($sql_insert); 

            $stmt->bindParam(':num_question_alt', $num_question_alt);
            $stmt->bindParam(':question_alt', $question_alt);
            $stmt->bindParam(':alternativeA', $alternativeA);
            $stmt->bindParam(':alternativeB', $alternativeB);
            $stmt->bindParam(':alternativeC', $alternativeC);
            $stmt->bindParam(':alternativeD', $alternativeD);
            $stmt->bindParam(':alternativeE', $alternativeE);
            $stmt->bindParam(':alternativeF', $alternativeF);
            $stmt->bindParam(':alternativeG', $alternativeG);
            $stmt->bindParam(':correctAlt', $correctAlt); 

            foreach ($params as $nameField => $valueField) { 
                foreach ($valueField as $indice => $value) {
    
                $num_question_alt = $params['num_question_alt'][$indice];
                $question_alt = $params['question_alt'][$indice];
                $alternativeA = $params['alternativaA'][$indice];
                $alternativeB = $params['alternativaB'][$indice];
                $alternativeC = $params['alternativaC'][$indice];
                $alternativeD = $params['alternativaD'][$indice];
                $alternativeE = $params['alternativaE'][$indice];
                $alternativeF = $params['alternativaF'][$indice];
                $alternativeG = $params['alternativaG'][$indice];
                $correctAlt = $params['alt_correta'][$indice];

                $stmt->execute();

                }
                
            } 

        }


    }

?>