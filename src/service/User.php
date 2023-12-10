<?php
 namespace BuyMeACoffee\Services;

 class User{
  private const MINIMUM_PASSWORD = 6;
  public  function isEmailValid(string $email):bool{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

  }
  public   function isPasswordValid(string $password):bool{
    return strlen($password) >= self::MINIMUM_PASSWORD;
  }


 }