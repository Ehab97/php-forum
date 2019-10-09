<?php

class Template{
  //path to template
  protected $templete;
  //variables passed in
  protected $vars = array();
  /*class constraction*/
  public function __construct($templete){
    $this->templete = $templete;
  }
  public function __get($key){
    return $this->vars[$key];
  }
   public function __set($key,$value){
      $this->vars[$key] = $value;
  }
   public function __toString(){
    extract($this->vars);
    chdir(dirname($this->templete));
    ob_start();
    include basename($this->templete);
    return ob_get_clean();
  }

}