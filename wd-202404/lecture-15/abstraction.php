<?php

// Abstract ATM class defining the contract
// It is is used to tell you that what to do
// but you have to implement the how to do in your child class
abstract class ATM {
    // Protected property to store the account balance
    protected $accountBalance = 0;

    // Abstract methods to be implemented by the subclass
    abstract protected function withdraw($amount);
    abstract protected function deposit($amount);

    // Public method to check balance
    public function checkBalance() {
        echo "Your balance is {$this->getBalance()}.\n";
    }

    // Protected method to get the current balance, hidden from user
    protected function getBalance() {
        return $this->accountBalance;
    }

    // Protected method to update balance, hidden from user
    protected function updateBalance($amount) {
        $this->accountBalance += $amount;
    }
}

// Concrete class implementing the abstract methods
class MyATM extends ATM {
    // Implementing the withdraw method
    public function withdraw($amount) {
        if ($amount > $this->getBalance()) {
            echo "Insufficient funds.\n";
        } else {
            $this->updateBalance(-$amount);
            echo "Withdrawing $amount from your account.\n";
        }
    }

    // Implementing the deposit method
    public function deposit($amount) {
        $this->updateBalance($amount);
        echo "Depositing $amount into your account.\n";
    }
}

// Client code
$atm = new MyATM();
$atm->checkBalance();
$atm->deposit(200);
$atm->checkBalance();
$atm->withdraw(100);
$atm->checkBalance();
$atm->withdraw(150);
$atm->checkBalance();


// Example 2: Mobile Phones
abstract class MobilePhone {
    abstract protected function makeCall($number);
    abstract protected function sendMessage($number, $message);

    public function showModel() {
        echo "This is a smartphone.\n";
    }
}

class MyPhone extends MobilePhone {
    public function makeCall($number) {
        echo "Calling $number...\n";
    }

    public function sendMessage($number, $message) {
        echo "Sending message to $number: $message\n";
    }
}

$phone = new MyPhone();
$phone->showModel();
$phone->makeCall("123-456-7890");
$phone->sendMessage("123-456-7890", "Hello!");
?>
