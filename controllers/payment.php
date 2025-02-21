<?php
require_once('payment-desc.php');


class PaymentMethod extends PaymentDesc{
    protected $paymendHeading = "<h1>These are the available payment method</h1>";
    protected $paymentEnding = "<h1>END OF CLASSES</h1>";

    function __construct()
    {
        echo $this->paymendHeading;
    }
    function __destruct()
    {
        echo $this->paymentEnding;
    }
    public function PayOnDelivery(){
        echo "Pay On Delivery";
    }
    public function PayStack(){
        echo "Pay Using Paystack";
    }
    public function DirectBankTransfer(){
        echo "<h3>Direct Back Transfer</h3>";
    }
}

$callClass = new PaymentMethod;
$callClass->DirectBankTransfer();
$callClass->DBT();