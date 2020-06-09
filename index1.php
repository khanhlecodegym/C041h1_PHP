<?php
    require 'libs/person.php';

    use Model\Person\Person;
    use Model\Person\Human;

    $per = new Person("ha");

    var_dump($per);

    if(count($_COOKIE) > 0) {
        echo $_COOKIE['name'];
    } else {
        echo 'name khong ton tai';
    }

    
?>