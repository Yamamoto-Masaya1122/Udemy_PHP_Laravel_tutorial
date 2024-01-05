<?php

// DB接続 PDO
function insertContact($request) {

require 'db_connection.php';
// 入力 DB保存 prepare, execute(配列)
$params = [
  'id' => null,
  'your_name' => $request['your_name'],
  'email' => $request['email'],
  'url' => $request['url'],
  'gender' => $request['gender'],
  'contact' => $request['age'],
  'created_at' => null
];

$params = [
  'id' => null,
  'your_name' => 'なまえ',
  'email' => 'test@test.com',
  'url' => 'http://test.com',
  'gender' => '1',
  'contact' => 'いいい',
  'created_at' => null
];

$params = [
  'id' => null,
  'your_name' => 'なまえ',
  'email' => 'test@test.com',
  'url' => 'http://test.com',
  'gender' => '1',
  'contact' => 'いいい',
  'created_at' => null
];

$count = 0;
$coulumns = '';
$values = '';

foreach(array_keys($params) as $key) {
  if($count++>0) {
    $columns .= ',';
    $values .=',';
  }
  $columns .= $key;
  $values .= ':'.key;
}

$sql = 'insert into contacts ('. $columns .')values('. $values .')'; //プレースホルダー

// var_dump($sql);
// exit();

$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->execute($params);//実行
}