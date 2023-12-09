<?php
namespace BuyMeACoffee;
use BuyMeACoffee\Kernel\Http\Router;
use BuyMeACoffee\Kernel\View\viewNotFound;

try {
  Router::get('/','HomePage@index');
} catch (viewNotFound $err) {
  echo $err->getMessage();
}
