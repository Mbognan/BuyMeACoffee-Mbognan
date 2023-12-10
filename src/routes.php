<?php
namespace BuyMeACoffee;
use BuyMeACoffee\Kernel\Http\Router;
use BuyMeACoffee\Kernel\View\viewNotFound;

try {
  Router::get('/','HomePage@index');
  Router::get('/about','HomePage@about');
  Router::get('/contact','/?uri=about');  

  Router::getAndPost('/signup', 'Account@signup');
  Router::getAndPost('/signin', 'Account@signin');
  Router::getAndPost('/account/edit', 'Account@edit');

  Router::get('/payment', 'Payment@payment');

} catch (viewNotFound $err) {
  echo $err->getMessage();
}
