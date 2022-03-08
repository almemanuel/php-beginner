<?php
    class Vehicle{
        public $licensePlate = null;
        public $color = null;


        function __construct($licensePlate, $color){
            $this->licensePlate = $licensePlate;
            $this->color = $color;
        }


        function acelerate(){
            echo 'RANDANDANDANDAN' . '\n';
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
    }

    $car = new Car('ABC1234', 'white');
    $motorcycle = new Motorcycle('DEF5467', 'black');
    echo '<pre>';
        print_r($car);
    echo '</pre><br>';
    echo '<pre>';
        print_r($motorcycle);
    echo '</pre>';
?>