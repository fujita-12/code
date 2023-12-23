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
        <section class="section-1">
            <h2>1-1</h2>
            <p>inputに入力したら指定した要素が出現する</p>
            <input type="text" name="sample1-1" value="" placeholder="sampletext">
            <div class="show-input-focus">
                <p>inputをフォーカスしたら表示させる項目<br>何も入力されてない場合は隠す</p>
            </div>
        </section>
    </div>
</main>
<footer>
    <?php require_once('./footer.php'); ?>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/index.js"></script>
</body>
</html>