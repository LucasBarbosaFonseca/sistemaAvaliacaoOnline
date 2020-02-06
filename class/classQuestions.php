<?php

    /* Classe abstrata e super-classe das sub-classes alternative e dissertative.
       As sub-classes alternative e dissertative herdarão atributos dessa super-classe.
    */

    abstract class Questions {

        protected $questionId;
        protected $questionNumber;

        //Setterd and Getters methods
        public function getQuestionId() {
            return $this->questionId;
        }

        public function setQuestionId($qi) {
            $this->questionId = $qi;
        }

        public function getQuestionNumber() {
            return $this->questionNumber;
        }

        public function setQuestionNumber($qn) {
            $this->questionNumber = $qn;
        }

    }

?>