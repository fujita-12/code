<?php $user_flag = 1 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <?php require_once('./header.php'); ?>
    </header>
<main>
    <div class="inner">
        <p>test</p>
        <?php echo $user_flag ?>
    </div>
</main>
<footer>
    <?php require_once('./footer.php'); ?>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/index.js"></script>
</body>
</html>