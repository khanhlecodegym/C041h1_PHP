<?php
namespace Model\Person;

class Person implements Animal {
    public $name;
    public $age;
    public $gender;

    function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    function eatAble()
    {
        echo 'ăn như hạm đội';
    }
}

class Human {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }
}

interface  Animal  {
    public CONST isBrand = true;

    function eatAble();
}

$persons = [
    new Person('Đức', 12, true),
    new Person('Thanh', 22, false),
    new Person('Bình', 122, true),
    new Person('Lân', 23, true),
];

$personOldes = array_filter($persons, function ($person) {
    return $person->gender;
});

// $arrNew = array_map(function ($per) {
//     // if($per->name === 'Bình') {
//     //     $per->name = 'Thành';
//     // }
//     return (array) $per;
// }, $persons);

$c4 = array_column($persons, 'name');

var_dump($c4);

?>