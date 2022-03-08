<?php
    class Worker{
        public $name = null;
        public $phone = null;
        public $children = null;

        function description(){
            return "<ul><li>$this->name</li><li>$this->phone</li><li>$this->children</li></ul>";
        }

        function changeChildren($children){
            $this->children = $children;
        }
    }

    $worker = new Worker();
    $worker->name = 'Johnny';
    $worker->phone = 15190414123;
    $worker->changeChildren(1);
    echo $worker->description();
?>