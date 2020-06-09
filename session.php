<?php
    session_start();

    if(isset($_SESSION['arrNum'])) {
        $arrNum = $_SESSION['arrNum'];
    } else {
        $arrNum = array();
    }
    
    if(isset($_POST['add'])) {
        array_push($arrNum, $_POST['num']);

        $_SESSION['arrNum'] = $arrNum;

        header('Location: index.php');
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
    <form action="session.php" method="post">
        <label for="number">Number: </label>
        <input type="text" name="num" id=""> <br>

        <input type="submit" name="add" value="Add">
    </form>
</div>

</body>
</html>