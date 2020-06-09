<?php require_once 'layouts/header.php' ?>

<?php 
session_start();
print_r($_SESSION['arrNum']);
    if(isset($_POST["name"])) {
        $jsonData = file_get_contents('data.json');
        $data = json_decode($jsonData, true);
        $codegymers = $data["codegymers"];

        $codegymers[] = array(
            "name" => $_POST["name"],
            "age" => (int) $_POST["age"],
            "email" => $_POST["email"]
        );

        $data["codegymers"] = $codegymers;

        $json_data = json_encode($data, JSON_UNESCAPED_UNICODE);
        file_put_contents('data.json', $json_data);
    }


    $jsonData = file_get_contents('data.json');
    $data = json_decode($jsonData, true);
    $codegymers = $data["codegymers"];

?>

<h2>Danh Sách Lớp C4</h2>

<?php foreach($codegymers as $codegymer) : ?>
    <h3>Name: <?= $codegymer["name"] ?></h3>
    <li>Age: <?= $codegymer["age"] ?></li>
    <li>Email: <?= $codegymer["email"] ?></li>
<?php endforeach; ?>


<div>
    <form action="index.php" method="post">
        <label for="name"></label>
        <input type="text" name="name" id=""> <br>

        <label for="age"></label>
        <input type="text" name="age" id=""> <br>

        <label for="email"></label>
        <input type="text" name="email" id=""> <br>

        <input type="submit" value="Add">
    </form>
</div>

<?php require_once 'layouts/footer.php' ?>

