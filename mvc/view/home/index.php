<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./public/css/indexStyles.css">
</head>

<body>
    <?php include_once 'view/partials/header.php' ?>
    <h3>Product Hot</h3>

    <section class="product">
        <?php foreach ($productHot as $product) : ?>
            <div class="product__item">
                <div class="product__image">
                    <img src='<?= $product->image ?>' alt="" srcset="">
                </div>
                <div class="product__info">
                    <h3><?= $product->productName ?></h3>
                    <p><?= $product->buyPrice ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <h3>Product All</h3>
    <section class="product">
        <?php foreach ($productAll as $product) : ?>
            <div class="product__item">
                <div class="product__image">
                    <img src='<?= $product->image ?>' alt="" srcset="">
                </div>
                <div class="product__info">
                    <h3><?= $product->productName ?></h3>
                    <p><?= $product->buyPrice ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</body>

</html>