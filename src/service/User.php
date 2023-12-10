<?php
declare (strict_types =1);
 namespace BuyMeACoffee\service;
 use BuyMeACoffee\Model\User as UserModel;
 class User{
  private const MINIMUM_PASSWORD = 6;
  public function __construct(private UserModel $userModel = new UserModel() ){

  }
  public function create(array $userData):bool{
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


 }