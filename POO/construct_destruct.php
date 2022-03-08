<?php
    class Human{
        public $name = null;

        function __construct($name){
            echo 'Sucess' . '<br>';
            $this->name = $name;
        }


        function __destruct(){
            echo 'Removed' . '<br>';
        }


        function __get($arg) {
            return $this->$arg;
        }
    }

    $people = new Human('George');
    echo $people->__get('name') . '<br>';

    unset($people);
?>