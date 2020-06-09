<?php
   if(isset($_POST['add'])) {
       $name = $_POST['name'];

       setcookie('name', $name, time() + 3600);

       header('Location: index1.php');

    }
    

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div>
    <form action="<?=  $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id=""> <br>

        <input type="submit" name="add" value="Add">
    </form>
</div>

</body>
</html>