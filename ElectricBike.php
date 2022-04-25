<?php

require_once ('Vehicle.php');
require_once ('LightableInterface.php');


class ElectricBike extends Vehicle implements LightableInterface

{
    public function switchOn()
    {
        if($this->currentSpeed >10){
        return true;
        }
    }
    public function switchOff()
    {
        return false;
    }
}