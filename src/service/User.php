<?php
declare (strict_types =1);
 namespace BuyMeACoffee\service;

use BuyMeACoffee\Kernel\Session;
use BuyMeACoffee\Model\User as UserModel;
use stdClass;

 class User{


  private const MINIMUM_PASSWORD = 6;

  private const PASSWORD_COST_FACTOR = 12;
  private const PASSWORD_ALGORITHM = PASSWORD_BCRYPT;
  public function __construct(private UserModel $userModel = new UserModel() ){
        

  }
  public function create(array $userData):string|bool{
    return $this->userModel->createUser($userData);
  }

  public function doesAccountExist(string $email):bool{
    return $this->userModel->doesAccountExist($email);
  }
  public  function isEmailValid(string $email):bool{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

  }
  public   function isPasswordValid(string $password):bool{
    return strlen($password) >= self::MINIMUM_PASSWORD;
  }

 

  public function hashPassword(string $password):string{
    return (string)password_hash($password, self::PASSWORD_ALGORITHM,[ 'cost'  => self::PASSWORD_COST_FACTOR]);
  }

  public function isVerified(string $clearPassword, string $hashPassword){
      return password_verify($clearPassword, $hashPassword);

  }

  public function getUserDetails(string $email){
    return $this->userModel->getUserDetails($email); 
  }


 }