<?php
/**
  *
  */
namespace Person;

class Person
{
    public $name;

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }
}

$person1 = new Person();
$person1->setName('Misha');

$person2 = new Person();
$person2->setName('Dima');

$person3 = new Person();
$person3->setName('Natasha');

echo $person1->getName() . " " . $person2->getName() . " " . $person3->getName() . " ";
