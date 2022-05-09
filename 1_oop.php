<?php
echo "oop";
class Player
{
    // properties
    public $name;
    public $speed = 5;

    // methods
    public function set_name($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

echo "object created <br>";

$player1 = new Player();

$player1->set_name("Angkit");

echo $player1->getName();
