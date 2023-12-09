<?php

namespace BuyMeACoffee\Kernel;

use Symfony\Component\Dotenv\Dotenv;

final class Bootstrap{
 
  public function __construct(){
    $dotent = new Dotenv();
    $this->loadEnvironmentVariables($dotent);
   
  }

  public function run():void{
    require dirname( __DIR__,1) . '/routes.php';

  }

// need to continue error
  private function initialize(){

  }

  private function loadEnvironmentVariables(Dotenv $dotenv): void{
    
    $dotenv->load(__DIR__.'/.env');
  }
 

}