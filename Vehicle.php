<?php

class Vehicle{

    /**
    * @var string
    */
    protected $color;

    /**
    * @var integer
    */
    protected $currentSpeed;

    /**
    * @var integer
    */
    protected $nbSeats;

    /**
    * @var integer
    */
    protected $nbWheels;

    public function __construct( string $color, int $nbSeats ){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }
    /**
     * @return string
     */ 
    public function forward() : string
    {
        $this->currentSpeed += 15;
        return "Go !";
    }
    /**
     * @return string
     */ 
    public function brack() : string
    {
        $sentence = "";
        while ( $this->currentSpeed > 0 ) {
            $this->currentSpeed -= 5;
            $sentence .= "Brake !!!";
        }
        $sentence .= "Stopped !!!";
        return $sentence;
    }

    public function setColor($color) : void
    {
        $this->color = $color;
    }
    /**
     * @return integer
     */ 
    public function getColor() : string
    {
        return $this->color;
    }

    public function setCurrentSpeed($currentSpeed) : void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }
    /**
     * @return integer
     */ 
    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }

    public function setNbSeats($nbSeats) : void
    {
        $this->nbSeats = $nbSeats;
    } 
    /**
     * @return integer
     */ 
    public function getNbSeats() : int
    {
        return $this->nbSeats;
    } 

    public function setNbWheels($nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }
    /**
     * @return integer
     */ 
    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }
}