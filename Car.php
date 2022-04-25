<?php

require_once ('Vehicle.php');
require_once ('LightableInterface.php');

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $energy;
    private $energyLevel;
    private $hasParkBrake = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    
    public function switchOn()
    {
        return true;
    }
    public function switchOff()
    {
        return false;
    }

    public function division(int $nombre) :float
    {
        if ($nombre === 0) {
            throw new Exception("division by zero");
        }
        return 1 / $nombre;
    }

    public function forward(): string
    {
        if ($this->hasParkBrake){
            throw new Exception('Le frein à main est enclenché !! HMMMM Ne reproduit pas cette erreur Homer!!');
        }
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(bool $parkBrake): void
    {
        $this->hasParkBrake = $parkBrake;
    }
}