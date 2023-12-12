<?php

namespace BuyMeACoffee\Controller;
use BuyMeACoffee\Kernel\Session;
use BuyMeACoffee\service\User as UserService;
use BuyMeACoffee\Kernel\View\View;
use BuyMeACoffee\service\UserSession;

class HomePage {

  private UserService $userService;
  private UserSession $userSession;
  private bool $isUserLogin;

  public function __construct(){
    $session = new Session();
      $this->userSession = new UserSession($session);
      $this->isUserLogin =  $this->userSession->isUserLogin();

  }
  public function index():void{

    $viewVariables = ['isUserLogin' => $this->isUserLogin];

    if( $this->userSession->isUserLogin()){
      $viewVariables['name'] = $this->userSession->getName();
     

    }
    View::render('home/index','HomePage',$viewVariables);
   
  }
 
}