<?php
$contactFile = '.contact.dat';

// ファイルを丸ごと読み込み
$fileContents = file_get_contents($contactFile);

echo $fileContents;

// ファイルに書き込み(上書き) 〇〇ファイルにXXを上書きする
file_put_contents($contactFile, 'テストです');

// 改行してデータを追加もできる
// $addText = 'テストです' . "\n";

// ファイルに書き込み(追記) 〇〇ファイルにXXを追記する
file_put_contents($contactFile, 'テストです', FILE_APPEND);

// 配列 file,区切る explode,foreach
$allData = file($contactFile); //file関数で配列の形式でファイルを取得

foreach($allData as $lineData){
  $lines = explode(',', $lineData);
  echo $lines[0]. '<br>';
  echo $lines[1]. '<br>';
  echo $lines[2]. '<br>';
}
?>