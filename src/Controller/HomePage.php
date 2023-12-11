<?php

namespace BuyMeACoffee\Controller;
use BuyMeACoffee\Kernel\Session;
use BuyMeACoffee\service\User as UserService;
use BuyMeACoffee\Kernel\View\View;
use BuyMeACoffee\service\UserSession;

class HomePage{

  private UserService $userService;
  private UserSession $userSession;

  public function __construct(){
    $session = new Session();
      $this->userSession = new UserSession($session);

  }
  public function index():void{

    $viewVariables = [];

    if( $this->userSession->isUserLogin()){
      $viewVariables['fullName'] = $this->userSession->getName();

    }
    View::render('home/index','HomePage',['name'=> $this->userSession->getName()]);
  }
 
}