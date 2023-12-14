<?php
namespace BuyMeACoffee\Model;

use BuyMeACoffee\Kernel\Data\Database;
use BuyMeACoffee\Kernel\View\View;

class Payment_model{

    private User $users;

    public function __construct(){
        $this->users = new User();
    }

    public function insertPayment(array $details):string|bool{
        $sql = 'INSERT INTO payment (userId, gcashEmail, currency) VALUES (:userId, :gcashEmail, :currency)';

        $viewVariables = [];
      
//     $details = [
//       'userId' => '31',
//       'gcashEmail' => 'john@example.com',
//       'currency' => 'PHP', // Make sure to hash passwords before storing them
//   ];
 

    
        if(Database::query($sql,$details)){
           return Database::lastInsertId();
          

        }

   
       

    

        return false;
    }

    // public function getPaymentDetails(string $paymentId){

    
    //     $sql = 'SELECT * FROM payment WHERE paymentId = :paymentId LIMIT 1';

    //     $paymentDetails = ['paymentId' => $paymentId];

    //     Database::query($sql,$paymentDetails);
    //     return Database::fetch();
    // }

}   