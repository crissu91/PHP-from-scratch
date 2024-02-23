<?php

class User
{
    //Properties
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    //Methods
    public function login()
    {
        echo $this->name . ' logged in';
    }
}

//Instantiate a new object
$user1 = new User('Mike', 'mike@example.com');

// $user1->name = 'Mike';
// $user1->email = 'mike@example.com';

$user1->login();

var_dump($user1);
