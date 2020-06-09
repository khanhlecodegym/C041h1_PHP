<?php
namespace Model\Person;

class Person {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }
}

class Human {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }
}

?>