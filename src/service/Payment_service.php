<?php

namespace BuyMeACoffee\service;

use BuyMeACoffee\Model\Payment_model;

class Payment_service{
    private Payment_model $paymentModel;

    public function __construct(){
        $this->paymentModel = new Payment_model();
    }
    public function createPayment(array $paymentDetails):string|bool{
        // var_dump($paymentDetails);
        return $this->paymentModel->insertPayment($paymentDetails);
        
    }

    // public function getPaymentDetails(string $paymentId){
    //         return $this->paymentModel->getPaymentDetails($paymentId); 
    // }
}