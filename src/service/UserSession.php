<?php
namespace BuyMeACoffee\service;

use BuyMeACoffee\Kernel\Session;

class UserSession{
  private Session  $session;
  public const USER_SESSION_ID = 'userId';

  public function __construct(Session $session){
    $this->session = $session;
  }
  public function isUserLogin():bool{

    return $this->session->doesExist(self::USER_SESSION_ID);
    }

    public function getName():string{
      return $this->session->get('fullName');
    }

    public function setAuthentication(array $userDetails){

    
      $this->session->sets($userDetails);
    
  
    }
    public function logout(){
      $this->session->destroy();
    }
  
}
