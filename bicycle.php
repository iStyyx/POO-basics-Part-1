<?php
class Bicycle
{
    // PROPRIÉTÉS
    private string $color;

    private int $currentSpeed;

    public int $nbSeats = 1;

    public int $nbWheels = 2;


    // Constantes



    // Méthodes

    public function __constructor(string $color, int $currentSpeed)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }

        // Color
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

        // Speed
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

        // Movement
    public function forward(): string
    {
        $this->currentSpeed = 10;
        return "The bike moves forward";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake! ";
        }
        $sentence .= "I'm stopped!";
        return $sentence;
    }

        // Other
    public function dump()
    {
        var_dump($this);
    }
}