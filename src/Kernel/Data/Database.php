<?php

namespace BuyMeACoffee\Kernel\Data;
use PDO;
use PDOException;
use PDOStatement;

class Database{
  private static ?PDO  $pdo;
  private static ?PDOStatement $stmt;
  public static function connect(array $dbDetails):void{

    try {
      static::$pdo = new PDO(
        "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_USER']};",
        $_ENV['DB_USER'],
        $_ENV['DB_PASSWORD']
      );
      // static::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
      exit('An Unexpected Error occurred');
    }

  }

  public static function query(string $sql, array $binds, bool $execute = true):bool{
    static::$stmt = static::$pdo->prepare($sql);

    foreach($binds as $key => $value){
      static::$stmt->bindValue($key, $value);
    }

    if($execute){
      return static::$stmt->execute();
    }
    return true;

  }

  public static function rowCount():int{
    return static::$stmt->rowCount();
  }

  public static function fetch(){
    return static::$stmt->fetch();
  }

  public static function fetchAll(): ?array{

    return static::$stmt->fetchAll() ?? null;

  }

  public static function quote(string $string): ?array{
    return static::$pdo->quote($string ) ?? null;
  }

}