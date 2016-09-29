<?php

class Database
{
     /**
     * Accessing constant credential .
     * @var [constant]
     */
     public $host     = DB_HOST;
     public $username = DB_USER;
     public $password = DB_PASS;
     public $db_name  = DB_NAME;

     public $link;
     public $error;

     /**
      * [Constructor called automaticale whenever object initiated, then call the connect function]
      */
     public function __construct(){
          //Call Connect function
          $this->connect();
     }

     /**
      * [connect function is reponsible for coonectig to Database]
      * @return [boolean] [if there is something wrong return false and display error]
      */
     private function connect(){
          $this->link = new mysqli($this->host, $this->username, $this->password, $this->db_name);

          if(!$this->link){
               $this->error = "Connection Filed: ". $this->link->connect_error;
               return false;
          }
     }

     /**
      * [select function is responsible for retrieving data from database ]
      * @param  [string] $query [this is passing by prepared statement from index.php]
      * @return [boolean]       [if there is result return the result, else will return false]
      */
     public function select($query){
          $result = $this->link->query($query) or die($this->link->error.__LINE__);

          if($result->num_rows > 0){
               return $result;
          }else {
               return false;
          }
     }

     /**
      * [insert function is responsible for insert data into database, this should be available only for admin]
      * @param  [SQL] $query  [this is  pass by form]
      * @return [header]      [if is succed, change url]
      */
     public function insert($query) {
          $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
          // validate the insert
          if($insert_row){
               header("Location: index.php?msg=".urlencode('Record Added'));
               exit();
          }else {
               die('Error : ('. $this->link.error . ') ' .$this->link->error);
          }

     }

     /**
      * [update function is reponsible for updating existing value in dtatabse]
      * @param  [sql $query]  [passing by admin]
      * @return [changing header]  [description]
      */
     public function update($query) {
          $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
          // validate the insert
          if($update_row){
               header("Location: index.php?msg=".urlencode('Record Updated'));
               exit();
          }else {
               die('Error : ('. $this->link.error . ') ' .$this->link->error);
          }

     }


     /**
      * [delete function is responsible for deleting data from database]
      * @param  [SQL $query]  passing by admin only
      * @return [chnage header location]
      */
     public function delete($query) {
          $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);

          // validate the insert
          if($delete_row){
               header("Location: index.php?msg=".urlencode('Record Deleted'));
               exit();
          }else {
               die('Error : ('. $this->link.error . ') ' .$this->link->error);
          }

     }











}
