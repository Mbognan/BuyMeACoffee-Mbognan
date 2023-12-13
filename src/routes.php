<?php
namespace BuyMeACoffee;
use BuyMeACoffee\Kernel\Http\Router;
use BuyMeACoffee\Kernel\Session;
use BuyMeACoffee\Kernel\View\viewNotFound;
use BuyMeACoffee\service\UserSession;

$session = new Session();

$userSession = new UserSession($session);

try {
     Router::get('/','HomePage@index');
      Router::get('/about','HomePage@about');
      Router::get('/contact','/about');  
  if(!$userSession->isUserLogin()){
      Router::getAndPost('/signup', 'Account@signUp');
      Router::getAndPost('/signin', 'Account@signIn');
  }
  if($userSession->isUserLogin()){
      Router::getAndPost('/account/edit', 'Account@edit');
      Router::get('/payment', 'Payment@payment');
      Router::get('/account/logout', 'Account@logout');
    }
 

} catch (viewNotFound $err) {
  echo $err->getMessage();
}
