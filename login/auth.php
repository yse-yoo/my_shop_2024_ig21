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

//TODO: POSTデータ取得
$posts = $_POST;

$email = $posts['email'];

//TODO: Email検索(SQL)
$sql = "SELECT * FROM users WHERE email = '{$email}'";
$stmt = $pdo->query($sql);

// データ変換
$user = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($user);

//TODO: セッション登録
//TODO: パスワードハッシュ検証

//TODO: ログイン成功の場合、user/ にリダイレクト
//TODO: エラーメッセージをセッションに登録
//TODO: ログイン失敗の場合、login/input.php にリダイレクト
