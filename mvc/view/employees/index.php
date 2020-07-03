<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>
    <h2>Danh Sách Nhân Viên</h2>

    <?php foreach($employees as $emp) : ?>
        <div class="product__item">
            <div class="product__image">
                <h3><?= $emp->lastName . ' '. $emp->firstName ?></h3>
            </div>
            <div class="product__info">
                <h3><?= $emp->email ?></h3>
                <p><?= $emp->jobTitle ?></p>
            </div>
        </div>
    <?php endforeach ; ?>
</body>
</html>