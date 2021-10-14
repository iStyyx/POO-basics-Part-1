<?php
class Car
{
    // PROPRIÉTÉS
    private int $nbWheels = 4;
    private int $nbSeats = 5;
    private int $currentSpeed;
    private string $color;
    private string $energy = 'electric';
    private int $energyLevel;

    // CONSTANTES

    // MÉTHODES

    public function __constructor(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

        // GETTERS & SETTERS
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->NbSeats;
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        if($energyLevel >= 0){
            $this->energyLevel = $energyLevel;
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }


        // MOVEMENTS
    public function start()
    {
        return 'The car starts!<br>';
    }

    public function forward(): string
    {
        $this->currentSpeed = 50;
        return "The car moves forward";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 5;
            $sentence .= "Braking!";
        }
        $sentence .= "I'm stopped!";
        return $sentence;
    }


        // OTHERS
    public function dump()
    {
        var_dump($this);
    }

}