<?php

class Truck extends Vehicle{

     /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var int
     */
    private $storage;

    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var array
     */
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $nbWheels, int $storageCapacity)
    {
        $this->setStorage(0);
        $this->setStorageCapacity($storageCapacity);
        $this->setEnergy($energy);
        parent::__construct($color, $nbSeats);
        parent::setNbWheels($nbWheels);
    }

    /**
     * @return string
     */ 
    function inFilling( int $merchandise ) : string
    {
        if($this->storage + $merchandise < $this->storageCapacity){
            $this->storage += $merchandise;//echo $this->storage;
        }
        elseif($this->storage + $merchandise == $this->storageCapacity){
            return "Truck is full !!!";
        }  
        elseif($this->storage + $merchandise > $this->storageCapacity){
            return "Cannot add more merchandises, call the chief or deliver your previous merchandises before filling new !!!";
        }
        if($this->storage < $this->storageCapacity){
            return "Truck in filling " . $this->storage . " tonnes / " . $this->storageCapacity . " !!!";
        }
    }

    /**
     * @return string
     */ 
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }

    /**
     * @return integer
     */ 
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @return integer
     */ 
    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }

    /**
     * @return integer
     */ 
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }
}