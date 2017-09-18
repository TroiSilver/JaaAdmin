<?php
class DB {
      private static $_instance = null;
      private $_pdo,
              $_query,
              $_results,
              $_error = false,
              $_count =0;

    private function __construct(){
      try{
        $this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/db') .'', Config::get('mysql/username') , Config::get('mysql/password'));
//error to be fixed line 12
      }catch(PDOExceptio $ex){
            die($ex->getMessage());
      }

    }//end of function __construct()

    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new DB();
        }
        return self::$_instance;
    }
}
