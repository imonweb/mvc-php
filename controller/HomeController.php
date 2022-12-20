<?php 

class HomeController {

  public $model;
  public function indexAction(){
    if(isset($_POST['LoginSubmit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      $checkUserLogin = $this->model->CheckUserLogin($username, $password);
      if($checkUserLogin == 1){
        $_SESSION['userLogin'] = 1;
      }
    }
    $this->routeManager();
  }

  public function routeManager(){
    if(isset($_SESSION['userLogin'])){
      return require_once('views/dashboard.php');
    }
    return require_once('views/login.php');
  }
} // class HomeController