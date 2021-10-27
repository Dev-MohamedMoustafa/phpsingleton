<?php
    /*
 * this code was written by Mohamed Moustafa
 * As a preview of his knowledge in Design Patterns
 * 
 */

class Singleton {
    private static $instance = null;
    
    
    private function __construct()
    {
      //Some Process
    }
   
    public static function getInstance()
    {
      if (self::$instance == null)
      {
        self::$instance = new Singleton();
      }
   
      return self::$instance;
    }
  }
?>