<?php

class Vehicle {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function get_name() {
        return $this->name;
    }
    
    public function move() {
       
    }
}

class WaterVehicle extends Vehicle {
    public function float() {
        
    }
}

class Ship extends WaterVehicle {
    
}

class Boat extends WaterVehicle {
    
}

class Submarine extends WaterVehicle {
    public function dive() {
        
    }
}

class AirVehicle extends Vehicle {
    public function fly() {
        
    }
}

class Aviation extends AirVehicle {
    protected $wingspan;
}

class Airplane extends Aviation {
   
}

class Helicopter extends Aviation {
    public function hover() {
        
    }
}

class Glider extends Aviation {
    
}

class Aerostation extends AirVehicle {
    protected $gas_volume;
}

class LandVehicle extends Vehicle {
    protected $wheels;
}

class RailwayVehicle extends LandVehicle {
    protected $track_gauge;
}

class Train extends RailwayVehicle {
   
}

class Tram extends RailwayVehicle {
    
}

class Metro extends RailwayVehicle {
    
}

class Automotive extends LandVehicle {
    protected $engine_type;
}

class Car extends Automotive {
   
}

class Truck extends Automotive {
    
}

class Bus extends Automotive {
   
}

class Motorcycle extends Automotive {
    
}

class Bicycle extends LandVehicle {
    public function pedal() {
        
    }
}

class MountainBike extends Bicycle {
    
}

class RoadBike extends Bicycle {
    
}

class AnimalDrawn extends LandVehicle {
    protected $animal_type;
}

class HorseCarriage extends AnimalDrawn {
    
}

class SpaceVehicle extends Vehicle {
    public function launch() {
       
    }
}

class Rocket extends SpaceVehicle {
   
}

class SpaceShuttle extends SpaceVehicle {
    
}

class Satellite extends SpaceVehicle {
    public function orbit() {
        
    }
}

class SpaceProbe extends SpaceVehicle {
    
}

// Пример
$car = new Car("Toyota Camry");
$airplane = new Airplane("Boeing 747");
$rocket = new Rocket("Falcon 9");
$bicycle = new MountainBike("Trek X-Caliber");

echo "Транспортные средства:\n";
echo $car->get_name() . "\n";
echo $airplane->get_name() . "\n";
echo $rocket->get_name() . "\n";
echo $bicycle->get_name() . "\n";


echo "\nПроверка наследования:\n";
echo "Car is LandVehicle: " . (($car instanceof LandVehicle) ? "да" : "нет") . "\n";
echo "Airplane is AirVehicle: " . (($airplane instanceof AirVehicle) ? "да" : "нет") . "\n";
echo "Rocket is SpaceVehicle: " . (($rocket instanceof SpaceVehicle) ? "да" : "нет") . "\n";
echo "Bicycle is Vehicle: " . (($bicycle instanceof Vehicle) ? "да" : "нет") . "\n";

?>
