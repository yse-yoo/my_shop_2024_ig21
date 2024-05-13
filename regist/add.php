<?php 
// lib/DB.php を読み込み
require_once '../lib/DB.php';

// POSTリクエストでなければ何も表示しない
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

// セッション開始
session_start();
// セッションハイジャック対策
session_regenerate_id(true);

// セッションデータ取得
$regist = $_SESSION['my_shop']['regist'];

// TODO: データベースに登録

// TODO: 予期せぬエラーの場合は、入力画面にリダイレクト
// TODO: 成功の場合は、完了画面にリダイレクト

header('Location: complete.php');
?>