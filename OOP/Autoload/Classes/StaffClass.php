<?php

class StaffClass extends AbstractUser {
    private $position;

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getPosition(){
        return $this->position;
    }
}