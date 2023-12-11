<?php

declare(strict_types=1);
function site_url(string $value = ''){
  if(!empty($value)){
    return $_ENV['SITE_URL'].$value;
  }
  return $_ENV['SITE_URL'];
}


function site_name(){
  
  return $_ENV['SITE_NAME'];
}

function redirect(string $value, $permanent = true): void{
  if($permanent){
    header('HTTP/1.1 301 Moved Permanently');
  }

  if(!empty($value)){
    $url =(str_contains($value, 'http'))? $value :  $_ENV['SITE_URL'].$value;
  }else{
    $url =  $_ENV['SITE_URL'].$value;


    
  }
  header('Location: '. $_ENV['SITE_URL']);
  exit();
}