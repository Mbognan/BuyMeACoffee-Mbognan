<?php

namespace BuyMeACoffee\Controller;

use BuyMeACoffee\Kernel\View\View;
class HomePage{
  public function index():void{
    View::render('home/index','HomePage',['name'=>'Mbognan']);
  }
 
}