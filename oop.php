<?php

    class Person{
        private $name;
        private $email;

        public function __construct($name, $email)
        {
            $this->name = $name;
            $this->email = $email;
        }

        public function __destruct()
        {
            echo __CLASS__ . " destructed";
        }

        public function getName()
        {
            return $this->name;
        }

        public function getEmail()
        {
            return $this->email;
        }

    }

    $mike = new Person("Mike Simpson", "mike.simpson@springfield.us");

    echo $mike->getName() . "<br>";

    echo $mike->getEmail() . "<br>";


    class Customer extends Person{

        private $balance;

        private static $dollar = 3.40;

        public function __construct($name, $email, $balance)
        {
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
        }

        public function getBalance()
        {
            return $this->balance;
        }

        public function setBalance($balance)
        {
            $this->balance = $balance;
        }    

        public static function getDollar()
        {
            return self::$dollar;
        }

    }

    $jane = new Customer("Jane McDonald's", "jane@mcdonalds.com", 2400);

    $jane->setBalance($jane->getBalance() + 100);

    echo "<br>Costumer: ". $jane->getName();
    
    echo "<br>Balance: ". $jane->getBalance();

    echo "<br>E-mail: ". $jane->getEmail();

    #static method
    echo "<br>Dollar: ". Customer::getDollar();

    echo "<br>"
?>