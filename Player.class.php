<?php

namespace eStadium\Baseball;

class Player
{
    private $name;
    private $number;
    private $position;
    public function __construct($name, $number, $position)
    {
        $this->name = $name;
        $this->number = $number;
        $this->position = $position;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }
}

?>
