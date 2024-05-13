<?php 
// セッション開始
session_start();
session_regenerate_id(true);

// セッションからユーザを取得
$user = $_SESSION['my_shop']['user'];

//ユーザがログイン済みでなければ（セッションにユーザデータがない）ログインにリダイレクト
if (!$user) {
    header('Location: ../login/');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>User Home</h2> 
</body>
</html>