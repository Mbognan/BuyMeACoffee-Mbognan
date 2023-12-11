<?php
declare(strict_types= 1);
namespace BuyMeACoffee\Controller;

use BuyMeACoffee\Kernel\Input;
use BuyMeACoffee\Kernel\Session;
use BuyMeACoffee\Kernel\View\View;
use BuyMeACoffee\service\User as UserService;
use BuyMeACoffee\service\UserSession;

class Account{

    //private UserService $userService;
    // private Session $session;
    private UserSession $userSession;
  public function __construct(private UserService $userService = new UserService){
        // $this->userService = new UserService();
        $session = new Session();
        $this->userSession = new UserSession($session);
  }     

  
  public function signUp():void{  
    $viewVariables = [];
    if(Input::post('signup_button')){
      // echo Input::post('email');
      $fullName = Input::post('name');
      $email = Input::post('email');
      $password = Input::post('password');

      if(isset($fullName, $email, $password)){
        if($this->userService->isEmailValid($email) && $this->userService->isPasswordValid($password)){

          if($this->userService->doesAccountExist($password)){
            $viewVariables[View::ERROR_MESSAGE_KEY] = 'An account with the same email address';
          }else{

          $user = [   
            "fullName" =>$fullName, 
            "email" =>$email, 
            "password" =>$this->userService->hashPassword($password)
          ];
        
          if($userId = $this->userService->create($user)){
            $this->userSession->setAuthentication([
              UserSession::USER_SESSION_ID => $userId,
              'email'=> $email,
              'fullName' => $fullName
            ]);
          //User Login Success     
            redirect('/');
          }else{
            $viewVariables[View::ERROR_MESSAGE_KEY] = 'An error has occurred while creating your account..';

          }
          
      }
    }else{
        $viewVariables[View::ERROR_MESSAGE_KEY] = 'Email / Password is not valid';

      }
    }else{
      $viewVariables[View::ERROR_MESSAGE_KEY] = 'All fields are required';

    }

  }

    View::render('account/signup','Sign Up',$viewVariables);
  }
  public function signIn():void{
    View::render('account/signin','Login');
  }

  public function logout():void{
    $this->userSession->logout();
    redirect('/');
  }

  
}