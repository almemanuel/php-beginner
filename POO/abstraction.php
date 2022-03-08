<?php
    class Worker{
        public $name = null;
        public $phone = null;
        public $children = null;


        function __set($arg, $value){
            $this->$arg = $value;
        }


        function __get($arg){
            return $this->$arg;
        }


        function description(){
            return '<ul><li>' . $this->__get('name') . '</li><li>' . $this->__get('phone') . '</li><li>' . $this->__get('children') . '</li></ul>';
        }
    }

    $worker = new Worker();
    $worker->__set('name', 'Johnny');
    $worker->__set('phone', 15190414123);
    $worker->__set('children', 1);
    echo $worker->description();
?>