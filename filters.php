<?php
    // if(filter_has_var(INPUT_POST, 'name')) {
    //     echo "data co ton tai";
    // } else {
    //     echo 'ko co j';
    // }


//     if(filter_has_var(INPUT_POST, 'name')) {
//        $email = $_POST['name'];
//         $email = filter_var($email, FILTER_SANITIZE_EMAIL);
// echo $email. '<br>';

//        if(filter_input(INPUT_POST, 'name', FILTER_VALIDATE_EMAIL)) {
//            echo 'Email  hop le';
//        } else {
//            echo 'email không hợp lệ';
//        }
//     }

    $data = array(
        "email" => FILTER_VALIDATE_EMAIL,
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
            );

            print_r(filter_input_array(INPUT_POST, $data));

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
        <input type="text" name="email" id=""> <br>
        <input type="text" name="age" id=""> <br>
        <input type="submit" name="add" value="Add">
    </form>
</div>

</body>
</html>