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
    // die(basename($this->templete));
    ob_start();
    require_once __Dir__.'/../'.$this->templete;
    // require_once __Dir__.'/'.'../'.$this->templete;
    return ob_get_clean();
  }
  public static function view($page_name,$var=[]){
    require_once __DIR__.'/../Views/'.$page_name.'.php';
  }
}