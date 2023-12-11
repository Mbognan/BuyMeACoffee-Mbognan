<?php
namespace BuyMeACoffee;
use BuyMeACoffee\Kernel\Http\Router;
use BuyMeACoffee\Kernel\View\viewNotFound;

try {
  Router::get('/','HomePage@index');
  Router::get('/about','HomePage@about');
  Router::get('/contact','/about');  

  Router::getAndPost('/signup', 'Account@signUp');
  Router::getAndPost('/signin', 'Account@signIn');
  Router::getAndPost('/account/edit', 'Account@edit');

  Router::get('/payment', 'Payment@payment');

} catch (viewNotFound $err) {
  echo $err->getMessage();
}
