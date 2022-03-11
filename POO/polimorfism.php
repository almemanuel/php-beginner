<?php
    class Vehicle{
        public $licensePlate = null;
        public $color = null;


        function __construct($licensePlate = null, $color = null){
            $this->licensePlate = $licensePlate;
            $this->color = $color;
        }


        function acelerate(){
            echo 'RANDANDANDANDAN' . '\n';
        }

        function changeGear(){
            echo "disengage clutch with foot and engage gear by hand<br>";
        }
    }
    class Car extends Vehicle{
        public $hasSolarRoof = true;


        function openSolarRoof(){
            echo 'VRIIIIM' . '\n';
        }


        function setSteeringWheelPosition(){
            echo 'XABLAU' . '\n';
        }
    }

    class Motorcycle extends Vehicle{
        public $hasCounterweightsHandlebars = true;

        function cram(){
            echo 'GRAU' . '\n';
        }

        function changeGear(){
            echo "disengage clutch with hand and engage gear by foot<br>";
        }
    }

    class Truck extends Vehicle{}

    $car = new Car('ABC1234', 'white');
    $motorcycle = new Motorcycle('DEF5467', 'black');
    $truck = new Truck();
    echo '<pre>';
        print_r($car);
    echo '</pre><br>';
    echo '<pre>';
        print_r($motorcycle);
    echo '</pre>';

    $car->changeGear();
    $motorcycle->changeGear();
    $truck->changeGear()

?>