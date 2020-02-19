<?php
    error_reporting(1);
	ini_set("display_errors",1);

    require_once 'class/Connection.php';

    class Alternatives {

        public function insertQuestAlt($params = array()) {       
            foreach ($params as $key => $value) { 
                $sql_insert = "INSERT INTO question_alternative (QUESTION_NUMBER, DESC_QUESTION_ALT, ALTERNATIVE_A, ALTERNATIVE_B,
                          ALTERNATIVE_C, ALTERNATIVE_D, ALTERNATIVE_E, ALTERNATIVE_F, ALTERNATIVE_G, ALT_CORRECT) VALUES 
                          (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                $stmt = Connection::prepare($sql_insert);
    
                $stmt->bindValue(1, $value['num_question_alt'], PDO::PARAM_INT);
                $stmt->bindValue(2, $value['question_alt'], PDO::PARAM_STR);
                $stmt->bindValue(3, $value['alternativeA'], PDO::PARAM_STR);
                $stmt->bindValue(4, $value['alternativeB'], PDO::PARAM_STR);
                $stmt->bindValue(5, $value['alternativeC'], PDO::PARAM_STR);
                $stmt->bindValue(6, $value['alternativeD'], PDO::PARAM_STR);
                $stmt->bindValue(7, $value['alternativeE'], PDO::PARAM_STR);
                $stmt->bindValue(8, $value['alternativeF'], PDO::PARAM_STR);
                $stmt->bindValue(9, $value['alternativeG'], PDO::PARAM_STR);
                $stmt->bindValue(10, $value['correctAlt'], PDO::PARAM_STR);

                $stmt->execute();

            } 
        }


    }

?>