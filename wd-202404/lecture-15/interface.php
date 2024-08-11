<?php

interface PaymentAbstract{
    public function payNow();
}

class Bkash implements PaymentAbstract{
    public function payNow(){
        echo "Payment processing by Gateway API Calling ".__class__."\n";
    }
}

class Stripe implements PaymentAbstract{
    public function payNow(){
        echo "Payment processing by Gateway API Calling ".__class__."\n";
    }
}

class Paypal implements PaymentAbstract{

    public function payNow(){
        echo "Payment processing by Gateway API Calling ".__class__."\n";    
    }
}

class Xyz implements PaymentAbstract{

    public function payNow(){
        echo "Payment processing by Gateway API Calling ".__class__."\n";    
    }
}



class ABC implements PaymentAbstract{
    public function payNow(){
        echo "Payment processing by Gateway API Calling ".__class__."\n";    
    }
}

class UBO implements PaymentAbstract{
    public function payNow(){
        echo "Payment processing by Gateway API Calling ".__class__."\n" ;    
    }
}


function createPayment(PaymentAbstract $paymentMethod){

    $paymentMethod->payNow();
}


createPayment(new ABC());
createPayment(new Bkash());
createPayment(new Xyz());
createPayment(new Paypal());
createPayment(new UBO());