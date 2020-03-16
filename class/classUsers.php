<?php

    require_once 'class/Connection.php';

    class Users {

        //Attributes
        private $user_name;
        private $user_email;
        private $user_password;
        private $confirmPassword;
        private $user_type;

        //getters and setters methods
        public function __set($attribute, $param) {
            $this->$attribute = $param;
        }

        public function __get($attribute) {
            return $this->$attribute;
        }

        //action methods
        public function validateDatas($name, $email, $password)  {
            $sql_select = "SELECT USER_NAME, USER_EMAIL, USER_PASSWORD FROM users";
            $stmt = Connection::prepare($sql_select);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row) 
            
            if ($row['USER_NAME'] == $name) {
                echo "<script language='javascript' type='text/javascript'>alert('Esse nome já existe na base de dados.');</script>";
                return false;
            }
            if ($row['USER_EMAIL'] == $email) {
                echo "<script language='javascript' type='text/javascript'>alert('Esse email já existe na base de dados.');</script>";
                return false;
            }
            if (password_verify($password, $row['USER_PASSWORD'])) {
                echo "<script language='javascript' type='text/javascript'>alert('Essa senha já existe na base de dados.');</script>";
                return false;
            }
            else {
                return true;
            }
        }

        public function passwordConfirm($pass, $confPass) {
            if ($pass == $confPass) {
                return 'confirm';
            }
            else {
                return 'no confirm';
            }
        }

        private function encryptPassword($password) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            return $hash;
        }

        public function insertUser($data) {
            $this->__set(user_name, $data['name']);
            $this->__set(user_email, $data['email']);
            $this->__set(user_password, $this->encryptPassword($data['password']));
            $this->__set(user_type, $data['type']);

            $sql_insert = "INSERT INTO users (USER_NAME, USER_EMAIL, USER_PASSWORD, USER_TYPE) VALUES 
                        (:name, :email, :password, :type)";

            $stmt = Connection::prepare($sql_insert);

            $stmt->bindParam(":name", $this->user_name, PDO::PARAM_STR);
            $stmt->bindParam(":email", $this->user_email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $this->user_password, PDO::PARAM_STR);
            $stmt->bindParam(":type", $this->user_type, PDO::PARAM_STR);

            $stmt->execute(); 
        }

    }

?>