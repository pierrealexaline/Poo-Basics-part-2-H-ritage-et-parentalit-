<?php


    require('Vehicle.php');
    require('Truck.php');

    //New truck ...

    $truck  =  new \Truck( "Black", 2,"fuel", 4, 100, 0 );
    var_dump( $truck );

    echo "<h3>" . $truck->getColor() . " Truck</h3>"; 
    echo "Color : " . $truck->getColor() . "\n<br>"; 
    echo "Nbre de roues : " . $truck->getNbWheels() . "\n<br>"; 
    echo "Nbre de sièges : " . $truck->getNbSeats() . "\n<br>"; 
    echo "Capacité de charge (en tonnes) : " . $truck->getStorageCapacity() . "\n<br>";
    echo "Phase chargement 1 : " . $truck->inFilling( 20 ) . "\n<br>";
    echo "Ok go to site 2 now ...\n<br>";
    echo "truck forward : " . $truck->forward() . "\n<br>";
    echo "truck forward : " . $truck->forward() . "\n<br>";
    echo "Get current speed (in km/h) : " . $truck->getCurrentSpeed() . "\n<br>";
    echo "Brack the truck near site 2 : " . $truck->brack() . "\n<br>";
    echo "Phase chargement 2 : " . $truck->inFilling( 80 ) . "\n<br>";
    echo "Ok go to deliver the merchandises ...\n<br>";
    
    // New truck ...

    $grey_truck  =  new \Truck( "Grey", 4,"electric", 8, 100);

    var_dump( $grey_truck );
    echo "<h3>" . $grey_truck->getColor() . " Truck</h3>"; 
    echo "Color : " . $grey_truck->getColor() . "\n<br>"; 
    echo "Nbre de roues : " . $grey_truck->getNbWheels() . "\n<br>"; 
    echo "Nbre de sièges : " . $grey_truck->getNbSeats() . "\n<br>"; 
    echo "Capacité de charge (en tonnes) : " . $grey_truck->getStorageCapacity() . "\n<br>";
    echo "Phase chargement 1 : " . $grey_truck->inFilling(30 ) . "\n<br>";
    echo "Ok go to site 2 now ...\n<br>";
    echo "truck forward : " . $grey_truck->forward() . "\n<br>";
    echo "truck forward : " . $grey_truck->forward() . "\n<br>";
    echo "Get current speed (in km/h) : " . $grey_truck->getCurrentSpeed() . "\n<br>";
    echo "Brack the truck near site 2 : " . $grey_truck->brack() . "\n<br>";
    echo "Phase chargement 2 : " . $grey_truck->inFilling( 80 ) . "\n<br>";
    echo "Ok go to deliver the merchandises ...\n<br>";
    