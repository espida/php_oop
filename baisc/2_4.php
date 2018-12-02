<?php
// Define a class
class User
{
    public $name;
    public $age;

    public function __construct($name,$age)
    {
        echo 'Class ' . __CLASS__ . ' instantiated <br>';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello()
    {
        $this->name . ' says hello';
    }

    public function __destruct()
    {
        echo 'destructor ran... <br>';
    }
}

$user1 = new User('Mohsen', 28);
echo $user1->name . ' is ' . $user1->age . ' years old';
echo '<br/>';
echo $user1->sayHello();

$user2 = new User('Ali', 28);
echo $user2->name . ' is ' . $user2->age . ' years old';
echo '<br/>';
echo $user2->sayHello();