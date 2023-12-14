<?php

namespace BuyMeACoffee\Controller;

use BuyMeACoffee\Kernel\Input;
use BuyMeACoffee\Kernel\Session;
use BuyMeACoffee\Kernel\View\View;
use BuyMeACoffee\service\Payment_service;
use BuyMeACoffee\service\User;
use BuyMeACoffee\service\UserSession;

class Payment{

   
    private UserSession $userSession;
    private User $userService;

    private Payment_service $paymentService;
    public function __construct(){
        $this->userService = new User();
        $this->userSession = new UserSession(new Session());
        $this->paymentService = new Payment_service();
     
    }

    public function payment(){
        $viewVariables = [];
    
        if (Input::postExist('payment_submit')) {
            $gcashEmail = Input::post('gcashEmail'); 
            $currency = Input::post('currency');
    
            try {
                if (!empty($gcashEmail) && !empty($currency)) {
                    $this->paymentService->createPayment([
                        'userId' => $this->userSession->getId(),
                        'gcashEmail' => $gcashEmail,
                        'currency' => $currency
                    ]);
    
                    $viewVariables[View::SUCCESS_MESSAGE_KEY] = 'Payment details saved, Thank you!';
                } else {
                    $viewVariables[View::ERROR_MESSAGE_KEY] = 'All fields are required!';
                }
            } catch (\PDOException $e) {
               
                if ($e->getCode() == 23000) {
             
                    $viewVariables[View::ERROR_MESSAGE_KEY] = 'Duplicate entry error: The payment details already exist!';
                } else {
                
                    $viewVariables[View::ERROR_MESSAGE_KEY] = 'An error occurred while processing the payment: ' . $e->getMessage();
                }
            }
        }
    
        View::render('payment/payment', 'Payment', $viewVariables);
    }
    
    
    public function page(){
        View::render('payment/page', 'Payment-Page');
    }
    public function paymentEdit(){
        View::render('payment/paymentEdit', 'Payment-Edit');
    }

}