<?php

    require 'animal.php';


    class Dog extends Animal {
        public $type;

        public function __construct($name, $sound, $type) {
            parent::__construct($name, $sound);
            $this->type = $type;
        }

        public function sing() {
            return parent::sing() . " thuộc $this->type";
            
        }
    }

    class Cat extends Animal {
        public $age;

        public function __construct($name, $sound, $age) {
            parent::__construct($name, $sound);
            $this->age = $age;
        }
    }


?>