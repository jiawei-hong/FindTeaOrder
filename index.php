<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首頁</title>
    <link rel="stylesheet" href="./assets/css/app.css">
</head>

<body>
    <?php
        include('./pdo.php');
        include('./nav.php');

        $mainPages = [
            'items' => 'items.php',
            'orderRecord' => 'order.php',
            'shoppingCart' => 'shoppingCart.php',
        ];

        $page = isset($_GET['main']) && array_key_exists($_GET['main'],$mainPages) ? $mainPages[$_GET['main']] : 'main.php' ;
    ?>

    <div class="container">
        <?php include($page); ?>
    </div>

    <script src="./assets/js/app.js"></script>
</body>

</html>
