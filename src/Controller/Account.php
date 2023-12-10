<?php
declare(strict_types= 1);
namespace BuyMeACoffee\Controller;

use BuyMeACoffee\Kernel\Input;
use BuyMeACoffee\Kernel\View\View;
use BuyMeACoffee\Services\User as UserService;

class Account{
  public function __construct(private UserService $userService = new UserService){
   
  }

  
  public function signup():void{  
    $viewVariables = [];
    if(Input::post('signup_button')){
      // echo Input::post('email');
      $fullName = Input::post('name');
      $email = Input::post('email');
      $password = Input::post('password');

      if(isset($fullName, $email, $password)){
        if($this->userService->isEmailValid($email) && $this->userService->isPasswordValid($password)){
          
          redirect('/?uri=home');
      }else{
        $viewVariables[View::ERROR_MESSAGE_KEY] = 'Email / Password is not valid';

      }
    }else{
      $viewVariables[View::ERROR_MESSAGE_KEY] = 'All fields are required';

    }

  }

    View::render('account/signup','Sign Up',$viewVariables);
  }
  public function signin():void{
    View::render('account/signin','Login');
  }

  
}