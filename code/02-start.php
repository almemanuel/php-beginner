<?php
    // <!-- Available in https://youtu.be/NhUFUfzZowM -->
    // vars
    $br = '<br>';
    $name = 'Emanuel';
    $Emanuel = 'Almeida'; // subvar of name
    echo $$name .$br;
    echo 'my name is '.$name .$br;

    echo $br;
    // conditionals
    if($name == 'Emanuel'){
        echo 'true' .$br;
    } else{
        echo 'false' .$br;
    }

    // PHP is dynamic
    $age = '23';
    echo $br;
    // equal
    if($age == 23){
        echo 'true' .$br;
    } else{
        echo 'false' .$br;
    }

    echo $br;
    // identic
    if($age === 23){
        echo 'true' .$br;
    } else{
        echo 'false' .$br;
    }

    echo $br;
    // loopings
    for($i = 0; $i < 10; $i++) {
        echo $i;
        echo $br;
    }

    echo $br;
    $i = 0;
    while($i < 10){
        echo $i .$br;
        $i++;
    }

    echo $br;
    // Functions
    printNumber(30);

    function printNumber($n){
        echo $n;
        echo '<br>';
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
            echo '<br>';
            echo $this->age;
            echo '<br>';
        }
    }

    echo $br;
    $person = new Person('Emanuel', '23');
    $person->printNameAndAge();

    echo $br;
    // Array
    $arr = ['Emanuel', 'Miguel', 'Rafael'];
    echo $arr[0];
    echo $br;
?>