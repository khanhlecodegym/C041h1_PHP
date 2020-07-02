<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Các Văn Phòng của Cty</h3>
    <div class="offices">
        <?php foreach ($offices as $office) : ?>
            <div>
                <span>City: </span><h3><?= $office->city ?></h3>
                <span>Phone: </span><p><?= $office->phone ?></p>
                <span>Address: </span><p><?= $office->addressLine1 ?></p>
                <span>Country: </span><p><?= $office->country ?></p>
            </div>
        <?php endforeach ?>
    </div>
</body>

</html>