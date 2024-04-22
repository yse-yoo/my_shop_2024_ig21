<?php 
// セッション開始
session_start();
// セッションハイジャック対策
session_regenerate_id(true);

// セッションにPOSTデータを登録
$_SESSION['my_shop']['regist'] = $_POST;

// POSTデータ受信
$post = $_POST;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
</head>

<body>
    <h2>会員登録確認</h2>
    <!-- form request confirm.php にデータをPOST送信-->
    <form action="" method="post">
        <div>
            <label for="">名前</label>
            <p><?= $post['name'] ?></p>
        </div>

        <div>
            <label for="">Email</label>
            <p><?= $post['email'] ?></p>
        </div>

        <div>
            <button>登録</button>
            <a href="input.php">修正</a>
        </div>
    </form>
</body>

</html>