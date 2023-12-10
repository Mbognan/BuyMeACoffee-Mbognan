<?php
declare(strict_types= 1);
namespace BuyMeACoffee\Kernel;

final class Input{
  public static function get(string $key){
    return $_GET[$key] ??  false;
  }
  public static function post(string $key){
    return $_POST[$key] ??  false;
  }
}
