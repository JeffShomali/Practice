<?php

class Database {
     private $host = 'localhost';
     private $user = 'root';
     private $pass = 'root';
     private $dbname = 'myblog';

     private $dbh;
     private $error;
     private $stmt;

     public function __construct(){
          // Set DSN
          $dsn = 'mysql:host='. $this->host . ';dbname=' . $this->dbname;
          // Set options
          $options = array(
               PDO::ATTR_PERSISTENT => true,
               PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
          );
          // Create new PDO
          try {
               $this->dbh=  new PDO($dsn, $this->user, $this->pass, $options);
          }catch(PDOEception $e) {
               $this->error = $e->getMessage();
          }
     }//end construct

     //Prepare an SQL statement
     public function query($query) {
          $this->stmt = $this->dbh->prepare($query);
     }

     public function bind($param, $value, $type = null){
          // Check to see what type of data it is
          if(is_null($type)){
               switch(true){
                    case is_int($value):
                         $type = PDO::PARAM_INT; //if is integer we are going to database as integer
                         break;
                    case is_bool($value):
                         $type = PDO::PARAM_BOOL;
                         break;
                    case is_null($value):
                         $type = PDO_PARAM_NULL;
                         break;
                         default:
                         $type = PDO::PARAM_STR;
               }
          }
          //Biding value
          $this->stmt->bindValue($param, $value, $type);
     }//end bind

     // Executes a prepared statement
     public function execute(){
          return $this->stmt->execute();
     }

     //
     public function lastInsertId(){
          $this->dbh->lastInsertId();
     }

     //Returns an array containing all of the result set rows
     public function resultSet(){
          $this->execute();
          return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
     }


}
