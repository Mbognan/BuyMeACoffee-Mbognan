<?php
declare (strict_types=1);
namespace BuyMeACoffee\Model;
use BuyMeACoffee\Kernel\Data\Database;
class User{

  

  public function createUser(array $userData):bool{
//try and error

    //  print_r($userData);
  //   $userData = [
  //     'fullName' => 'John Doe',
  //     'email' => 'john@example.com',
  //     'password' => 'hashed_password', // Make sure to hash passwords before storing them
  // ];
  // echo '<br>';
  // exit(print_r($userData));
    $sql = 'INSERT INTO user (fullName,email, password) VALUES ( :fullName,:email, :password)';
   
     
    return Database::query($sql, $userData);
}


  public function doesAccountExist(string $email):bool{

    $sql ='SELECT * FROM user WHERE email = :email LIMIT 1';

    Database::query($sql,['email'=>$email]);
    
    return Database::rowCount()>1;

  }
  public function loginUser(string $email, string $password):bool{


    return true;
  }
  
}