<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $storageCapacity;
    private int $loading = 0;
    private string $energy;

    public function __construct(string $color, int $nbSeats, private string $energy, string $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->energy = $energy;
    }

    public function setStorageCapacity(int $storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity(){
        return $this->storageCapacity;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    
    public function getEnergy(): string
    {
    return $this->energy;
    }

   

    public function loading() : string
    {
        $sentence = "";
        if ($this->loading < $this->storageCapacity) {
            $sentence .= "In filling";
        }
        if ($this->loading == $this->storageCapacity) {
            $sentence .= "Full";
        }
        return $sentence;

    }
}
    