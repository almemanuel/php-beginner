<?php
    class Dad{
        private $name = 'Louis';
        protected $lastName = 'Montgomery';
        public $mood = 'happy';
    }

    $dad = new Dad();
    echo $dad->mood;
    echo '<br>';
    $dad->mood = 'sad';
    echo $dad->mood;
?>