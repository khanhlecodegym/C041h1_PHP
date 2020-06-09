<?php
    require 'libs\dog.php';

    $dog = new Dog('Tony', "Kamezoko", 'Đức');
    $cat = new Cat('David', "Koloha", 'Brazin');

    echo $dog->sing() . '<br>';
    echo $cat->sing() . '<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>