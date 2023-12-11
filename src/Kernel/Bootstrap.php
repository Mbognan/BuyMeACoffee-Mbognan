<?php

namespace BuyMeACoffee\Kernel;

use BuyMeACoffee\Kernel\Data\Database;
use Symfony\Component\Dotenv\Dotenv;

final class Bootstrap{
 
  public function __construct(){
    $dotent = new Dotenv();
    $this->loadEnvironmentVariables($dotent);
    $this->initializeDatabase();
   
  }

  public function run():void{
    require dirname( __DIR__,1) . '/routes.php';

  }

// need to continue error
  public function initializeDatabase(){
    $userData = [
      'db_host' => $_ENV['DB_HOST'],
      'db_name' => $_ENV['DB_NAME'],
      'db_user' => $_ENV['DB_USER'],
      'db_password' => $_ENV['DB_PASSWORD']
    ];
   Database::connect($userData);
  }
  private function loadEnvironmentVariables(Dotenv $dotenv): void{
    
    $dotenv->load(__DIR__.'/.env');
  }
 

}