<?php 

class Input{
  public static function post(string $nama){
    if(isset($_POST[$nama])){
      return true;
      return $_POST[$nama];
    } 
    return false;
  }
}

