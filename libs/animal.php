<?php

    class Animal {
        protected $name;
        protected $sound;

        public function __construct($name, $sound) {
            $this->name = $name;
            $this->sound = $sound;
        }

        public function sing() {
            return "$this->name hat bai hat $this->sound";
        }
    }

?>