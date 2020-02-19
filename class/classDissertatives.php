<?php
    error_reporting(1);
    ini_set("display_errors",1);
    
    require_once 'class/Connection.php';

    class Dissertatives {

        public function insertQuestDis($params = array()) {
            foreach ($params as $key => $value) {         
                $sql_insert = "INSERT INTO question_dissertative (QUESTION_DIS_NUMBER, DESC_QUESTION_DIS) VALUES (?, ?)";
                $stmt = Connection::prepare($sql_insert);

                $stmt->bindValue(1, $value['num_question_dis'], PDO::PARAM_INT);
                $stmt->bindValue(2, $value['question_dis'], PDO::PARAM_STR);

                $stmt->execute();

            } 
                 
        }

    }

?>