<?php
// Define a class
class User
{
    // Properties (attributes)
    public $name;

    // Method (function)
    public function sayHello()
    {
        return $this->name . ' says Hello';
    }
}

// Instantiate a user object from the user class
$user1 = new User();
$user1->name = 'Mohsen';
echo $user1->name;
echo '<br/>';
echo $user1->sayHello();

// Create new user
echo '<br/>';
$user2 = new User();
$user2->name = 'Reza';
echo $user2->name;
echo '<br/>';
echo $user2->sayHello();