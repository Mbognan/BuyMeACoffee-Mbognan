<?php

namespace BuyMeACoffee\Kernel\View;
use InvalidArgumentException;
use ReflectionException;  
use ReflectionClass;
use ReflectionMethod;

final class View{
  private const PATH = __DIR__ .  '/../../../templates/';
  private const FILE_EXTENSION = '.html.php';
   public static function render(string $view, string $title,array $context){

    extract($context);
    require_once self::PATH. 'partials/header.inc.html.php';

    if(self::isViewExists($view)){
       include_once(self::PATH. $view . self::FILE_EXTENSION);
    }else{
      throw new viewNotFound(sprintf('"%s" does not exists.', $view . self::FILE_EXTENSION));
    }

    require_once self::PATH. 'partials/footer.inc.html.php';

   
      
   }

   private static function isViewExists(string $filename):bool{
    return is_file(self::PATH . DIRECTORY_SEPARATOR. $filename. '.html.php');
   }


}