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
    private bool $isUserLogin;
  public function __construct(private UserService $userService = new UserService){
        // $this->userService = new UserService();
        $session = new Session();
        $this->userSession = new UserSession($session);
   
  }     

  
  public function signUp():void{  
    $viewVariables = [];
    if(Input::postExist('signup_button')){
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
            $this->userSession->setAuthentication($userId,$email,$fullName
            );
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
    $viewVariables = [];
    if(Input::postExist('signin_button')){ 
    $email = Input::post('email');
    
    $password = Input::post('password');

    $userDetails = $this->userService->getUserDetails($email);

    // var_dump($userDetails); exit();
    // $hashPassword = $userDetails['password'];
    // $userId = (string)$userDetails['userId'];
    // $userEmail = $userDetails['email'];
    //  $userName = $userDetails['fullName'];
    // var_dump($hashPassword); exit();


  
   
    if(!empty($userDetails['password']) && $this->userService->isVerified($password, $userDetails['password'])){
      $this->userSession->setAuthentication($userDetails['userId'], $userDetails['email'],$userDetails['fullName']);
      redirect('/');
    
    }else{
      
       echo $viewVariables[View::ERROR_MESSAGE_KEY] = 'Credentials are not correct';
    }
    
  }
    
  View::render('account/signin','Login',$viewVariables);

  }

  // for future Updates
  public function edit(){
    if(Input::postExist('edit_submit')){
      $name = Input::post('name');
      $email = Input::post('email');
    }
    
    View::render('account/edit','Edit Account',['isUserLogin' => $this->isUserLogin]);
  }

  public function logout():void{  
    $this->userSession->logout();
    redirect('/');
  }

  
}