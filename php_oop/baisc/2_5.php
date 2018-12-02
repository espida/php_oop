<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$user = new User('Vahid',27);

$user->setName('Mohsen');
$user->setAge(28);
echo $user->getName() . ' is ' . $user->getAge() . ' years old!';
echo '<br>';

class Users
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($property)
    {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property))
        {
            return $this->$property = $value;
        }
    }
}

$users = new Users('Ali', 29);

$users->__set('name','Reza');
$users->__set('age', 27);

echo $users->__get('name') . ' is ' . $users->__get('age') . ' years old...';