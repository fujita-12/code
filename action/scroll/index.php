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
            <div class="scroll-container">
                <div class="big-category">
                    <ul>
                        <li class="b-category bc-a select" data-mc="bc-a-middle-category">カテゴリー1</li>
                        <li class="b-category bc-b" data-mc="bc-b-middle-category">カテゴリー2</li>
                        <li class="b-category bc-c" data-mc="bc-c-middle-category">カテゴリー3</li>
                        <li class="b-category bc-d" data-mc="bc-d-middle-category">カテゴリー4</li>
                        <li class="b-category bc-e" data-mc="bc-e-middle-category">カテゴリー5</li>
                    </ul>
                </div>
                <div class="middle-category">
                    <div class="middle-category-list bc-a-middle-category">
                        <ul>
                            <li class="m-category mc-a select" data-qa="bc-a-mc-a-content">B1Mカテゴリー1</li>
                            <li class="m-category mc-b" data-qa="bc-a-mc-b-content">B1Mカテゴリー2</li>
                            <li class="m-category mc-c" data-qa="bc-a-mc-c-content">B1Mカテゴリー3</li>
                            <li class="m-category mc-d" data-qa="bc-a-mc-d-content">B1Mカテゴリー4</li>
                            <li class="m-category mc-e" data-qa="bc-a-mc-e-content">B1Mカテゴリー5</li>
                            <li class="m-category mc-f" data-qa="bc-a-mc-f-content">B1Mカテゴリー6</li>
                            <li class="m-category mc-g" data-qa="bc-a-mc-g-content">B1Mカテゴリー7</li>
                        </ul>
                        <div class="content-area">
                            <div class="qa-content bc-a-mc-a-content first-content active">
                                <p>大1中1</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>
                                        A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト<br>
                                        <a class="page-inner-link" onClick="scrollLink('bc-a', 'mc-a', 'bc1-mc1-qa6');" tabindex="-1">カテゴリー大1中1のQ6へ</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>
                                        A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト<br>
                                        <a class="page-inner-link" onClick="scrollLink('bc-a', 'mc-c', 'bc1-mc3-qa3');" tabindex="-1">カテゴリー大1中3のQ3へ</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt class="bc1-mc1-qa6">Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-a-mc-b-content">
                                <p>大1中2</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-a-mc-c-content">
                                <p>大1中3</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt class="bc1-mc3-qa3">Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-a-mc-d-content">
                                <p>大1中4</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>
                                        A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト<br>
                                        <a class="page-inner-link" onClick="scrollLink('bc-b', 'mc-c', 'bc2-mc3-qa3');" tabindex="-1">カテゴリー大2中3のQ3へ</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-a-mc-e-content">
                                <p>大1中5</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-a-mc-f-content">
                                <p>大1中6</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-a-mc-g-content">
                                <p>大1中7</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="middle-category-list bc-b-middle-category">
                        <ul>
                            <li class="m-category mc-a select" data-qa="bc-b-mc-a-content">B2Mカテゴリー1</li>
                            <li class="m-category mc-b" data-qa="bc-b-mc-b-content">B2Mカテゴリー2</li>
                            <li class="m-category mc-c" data-qa="bc-b-mc-c-content">B2Mカテゴリー3</li>
                            <li class="m-category mc-d" data-qa="bc-b-mc-d-content">B2Mカテゴリー4</li>
                            <li class="m-category mc-e" data-qa="bc-b-mc-e-content">B2Mカテゴリー5</li>
                            <li class="m-category mc-f" data-qa="bc-b-mc-f-content">B2Mカテゴリー6</li>
                        </ul>
                        <div class="content-area">
                            <div class="qa-content bc-b-mc-a-content first-content active">
                                <p>大2中1</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-b-mc-b-content">
                                <p>大2中2</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>
                                        A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-b-mc-c-content">
                                <p>大2中3</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt class="bc2-mc3-qa3">Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-b-mc-d-content">
                                <p>大2中4</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-b-mc-e-content">
                                <p>大2中5</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-b-mc-f-content">
                                <p>大2中6</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                    <div class="middle-category-list bc-c-middle-category">
                        <ul>
                            <li class="m-category mc-a select" data-qa="bc-c-mc-a-content">B3Mカテゴリー1</li>
                            <li class="m-category mc-b" data-qa="bc-c-mc-b-content">B3Mカテゴリー2</li>
                            <li class="m-category mc-c" data-qa="bc-c-mc-c-content">B3Mカテゴリー3</li>
                            <li class="m-category mc-d" data-qa="bc-c-mc-d-content">B3Mカテゴリー4</li>
                            <li class="m-category mc-e" data-qa="bc-c-mc-e-content">B3Mカテゴリー5</li>
                            <li class="m-category mc-f" data-qa="bc-c-mc-f-content">B3Mカテゴリー6</li>
                        </ul>
                        <div class="content-area">
                            <div class="qa-content bc-c-mc-a-content first-content active">
                                <p>大2中1</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-c-mc-b-content">
                                <p>大2中2</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-c-mc-c-content">
                                <p>大2中3</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt class="bc2-mc3-qa3">Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-c-mc-d-content">
                                <p>大2中4</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-c-mc-e-content">
                                <p>大2中5</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>

                            <div class="qa-content bc-c-mc-f-content">
                                <p>大2中6</p>
                                <dl>
                                    <dt>Q1 サンプル</dt>
                                    <dd>A1 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q2 サンプル</dt>
                                    <dd>A2 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q3 サンプル</dt>
                                    <dd>A3 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q4 サンプル</dt>
                                    <dd>A4 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q5 サンプル</dt>
                                    <dd>A5 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                                <dl>
                                    <dt>Q6 サンプル</dt>
                                    <dd>A6 サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                
                
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