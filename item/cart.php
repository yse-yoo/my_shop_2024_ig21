<?php 
// env.php を読み込み
require_once '../env.php';

// lib/DB.php を読み込み
require_once '../lib/DB.php';

// DBに接続する
$db = new DB();

// 商品IDの取得
$item_id = $_GET['item_id'];
// var_dump($item_id);

// DBから items.id を使って商品の取得
$sql = "SELECT * FROM items WHERE id = :id;";
$stmt = $db->pdo->prepare($sql);
$stmt->execute(['id' => $item_id]);
$item = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($item);

?>