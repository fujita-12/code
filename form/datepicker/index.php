<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <?php require_once('./header.php'); ?>
    </header>
<main>
    <div class="inner">
        
        <section class="section-1">
            <p class="ttl">1-1 セレクトボックスを選択したらdatepickerを自動で表示する</p>
            <p>
                <label class="selectbox-001">
                    <select name="select-cue" id="select-cue">
                        <option hidden>選択してください</option>
                        <option value="1">セレクト1</option>
                        <option value="2">セレクト2</option>
                        <option value="3">セレクト3</option>
                    </select>
                </label>
            </p>
            <p>
                <input type="text" id="datepicker" >
            </p>
            <p>
                <input type="text" id="datepicker2" >
            </p>
        </section>
    </div>
</main>
<footer>
    <?php require_once('./footer.php'); ?>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="./js/index.js"></script>
</body>
</html>