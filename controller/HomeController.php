<?php 

class HomeController {

  public $model;
  public function indexAction(){
    $this->routeManager();
  }

  public function routeManager(){
    return require_once('views/login.php');
  }
} // class HomeController