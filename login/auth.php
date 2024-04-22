<?php
//設定ファイル「env.php」読み込み
require_once '../env.php';

//TODO: データベース接続処理
$db_connection = DB_CONNECTION;
$db_name = DB_DATABASE;
$db_host = DB_HOST;
$db_port = DB_PORT;
$db_user = DB_USERNAME;
$db_password = DB_PASSWORD;

$dsn = "{$db_connection}:dbname={$db_name};host={$db_host};charset=utf8;port={$db_port}";
try {
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage();
    echo $dsn;
    exit;
}

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

var_dump($stmt);

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
