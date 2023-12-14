<?php

namespace BuyMeACoffee\Kernel\View;
use InvalidArgumentException;
use ReflectionException;  
use ReflectionClass;
use ReflectionMethod;

final class View{
  private const PATH = __DIR__ .  '/../../../templates/';
  private const FILE_EXTENSION = '.html.php';
  public const SUCCESS_MESSAGE_KEY = 'success_message';
  public const ERROR_MESSAGE_KEY = 'error_message';
   public static function render(string $view, string $title,array $context = []):void{

    extract($context);
    include self::PATH. 'partials/header.inc.html.php';

    if(self::isViewExists($view)){
       include_once(self::PATH. $view . self::FILE_EXTENSION);
    }
    else{
      throw new viewNotFound(sprintf('%s does not exists.', $view . self::FILE_EXTENSION));
    }

    include self::PATH . 'partials/footer.inc.html.php';

   
      
   }

   private static function isViewExists(string $filename):bool{
    return is_file(self::PATH . DIRECTORY_SEPARATOR. $filename. '.html.php');
   }


}