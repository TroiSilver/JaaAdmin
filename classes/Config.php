<?php


class Config {
    public static function get($path = null){

      if($path){
        $config = $GLOBALS['config'];
        $path = explode('/', $path);

        foreach ($path as $bit) {

        if(isset($config[$bit])){
            $config = $config[$bit];
        }
      }//end of foreach loop
      return $config;
      }
      return false;
    }// end of function get()
}//end of class Config
