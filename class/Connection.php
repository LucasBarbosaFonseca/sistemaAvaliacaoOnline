<?php
 
   class Connection {

      const HOSTNAME = "127.0.0.1";
      const USERNAME = "root";
      const PASSWORD = "";
      const DBNAME = "testapplication";
      public static $conn;

      public static function getConnection() {

         if (!isset(self::$conn)) {
            
            try {
               
               self::$conn = new PDO('mysql:host=' . self::HOSTNAME . ';dbname=' . self::DBNAME, self::USERNAME, self::PASSWORD);
               self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            } catch (PDOException $e) {
               
               echo $e->getMessage();

            }

         }

         return self::$conn;

      }

      public static function prepare($sql) {
         return self::getConnection()->prepare($sql);
      }

}
            
?>