<?php
// TODO: DBに接続する
// TODO: items テーブルから商品をすべて取得するSQL
// TODO: SQLを実行
// TODO: PHPで処理できる商品の配列作成
$items = [];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="h2">商品⼀覧</h2>
        <table class="table">
            <thead>
                <tr>
                    <th><a class="btn btn-outline-primary" href="input.php">新規</a></th>
                    <th>コード</th>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>在庫数</th>
                    <th>更新⽇</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($items): ?>
                <?php foreach ($items as $item): ?>
                   <!-- TODO: 商品の繰り返し表示 -->
                <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</body>

</html>