<?php
interface PaymentInterface{
    public function payment();
}

class CreditCardPayment implements PaymentInterface{
    public function payment(){
        echo "クレジットカード支払いです。\n";
    }
}

class PayPalPayment implements PaymentInterface{
    public function payment(){
        echo "paypal支払いです。\n";
    }
}

class Payment{
    private PaymentInterface $payment;

    public function __construct(PaymentInterface $payment){
        $this->payment = $payment;
    }

    public function executeProcess(){
        $this->payment->payment();
    }
}
$credit = new CreditCardPayment();
$creditPayment = new Payment($credit);
$paypal = new PayPalPayment();
$paypalPayment = new Payment($paypal);

$creditPayment->executeProcess();
$paypalPayment->executeProcess();