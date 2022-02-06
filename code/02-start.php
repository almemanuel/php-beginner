<?php
    // <!-- Available in https://youtu.be/NhUFUfzZowM -->
    // vars
    $name = 'Emanuel';
    $Emanuel = 'bla bla'; // subvar of name
    echo $$name .' | ';
    echo 'my name is '.$name .' | ';

    // conditionals
    if($name == 'Emanuel'){
        echo 'true | ';
    } else{
        echo 'false | ';
    }

    // PHP is dynamic
    $age = '23';

    // equal
    if($age == 23){
        echo 'true | ';
    } else{
        echo 'false | ';
    }

    // identic
    if($age === 23){
        echo 'true | ';
    } else{
        echo 'false | ';
    }

    // loopings
    for($i = 0; $i < 10; $i++) {
        echo $i;
        echo ' | ';
    }

    $i = 0;
    while($i < 10){
        echo $i .' | ';
        $i++;
    }

    // Functions
    printNumber(30);

    function printNumber($n){
        echo $n;
        echo " | ";
    }

    // Classes
    class Person{
        public $name;
        public $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        public function printNameAndAge(){
            echo $this->name;
            echo ' | ';
            echo $this->age;
            echo ' | ';

        }
    }

    $person = new Person('Emanuel', '23');
    $person->printNameAndAge();

    // Array
    $arr = ['Emanuel', 'Miguel', 'Rafael'];
    echo $arr[0];
?>