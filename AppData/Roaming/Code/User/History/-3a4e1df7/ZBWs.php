<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
        include_once('../vendor/connect.php');

        $product_id = $_GET['product_id'];
        $sql = "SELECT * FROM products WHERE id = $product_id";
        $product = query($sql);
        $product = mysqli_fetch_assoc($product);

    ?>
    <div class="tovar">
        <img src="../assets/images/products/<?=$product['photo']?>" alt="post">

        <div class="text">
            <h2 style="margin: 5px 0;"><?=$product['name']?></h2>
            <h2 style="margin: 5px 0;"><?=$product['price']?></h2>
            <h2 style="margin: 5px 0;"><?=$product['category']?></h2>
            <h2>Характеристики</h2>
            <h2 style="margin: 5px 0;"><?=$product['manufacturer']?></h2>
            <h2 style="margin: 5px 0;"><?=$product['model']?></h2>
            <h2 style="margin: 5px 0;"><?=$product['year']?></h2>
        </div>
    </div>
</body>
</html>