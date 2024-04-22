<?php
//設定ファイル「env.php」読み込み
require_once '../env.php';
require_once '../lib/DB.php';

$db = new DB();
$pdo = $db->pdo;

//POSTデータ取得
$posts = $_POST;

// name=email のデータ
$email = $posts['email'];
// name=password のデータ
$password = $posts['password'];

//Email検索(SQL)
// $sql = "SELECT * FROM users WHERE email = '{$email}'";
// $stmt = $pdo->query($sql);

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);

// $sql = "SELECT * FROM users WHERE email = :email";
// $stmt = $pdo->prepare($sql);
// $stmt->bindParam(':email', $email);
// $stmt->execute();

// データ変換
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$is_scussess = false;
if ($user) {
    $hash = $user['password'];
    //パスワードハッシュ検証
    $is_scussess = password_verify($password, $hash);
}

if ($is_scussess) {
    //ログイン成功の場合、user/ にリダイレクト
    header('Location: ../user/');
} else {
    //ログイン失敗の場合、login/input.php にリダイレクト
    header('Location: input.php');
}
//TODO: セッション登録
//TODO: エラーメッセージをセッションに登録
