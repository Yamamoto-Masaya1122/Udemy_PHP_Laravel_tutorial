<?php

// 文字列の長さを得る関数
$text = 'abc';

echo strlen($text);
echo '<br>';
  // 日本語の場合はマルチバイト数でないと、正しい表示にならない。
$text2 = 'あいうえお';

  // echo strlen($text2);
echo mb_strlen($text2);


// 文字列の置換
echo '<br>';
$str = '文字列の置換します';
echo str_replace('置換', 'ちかん', $str); //第一引数は置き換えたい文字、第二引数は置き換える文字, 第三引数は文字列の中身


// 指定文字列で分割
echo '<br>';
$str_2 = '指定文字列で、分割します';
var_dump(explode('、', $str_2)); //第一引数は何で区切るか？、第二引数はどの文字列か？
echo '<br>';


// 正規表現

$str_3 = '特定の文字列が含まれているか確認する';
echo preg_match('/文字列/', $str_3);
echo '<br>';

// 指定文字列から文字列を取得する
echo substr('あいう', 2); //これだと文字化けする
echo '<br>';
echo mb_substr('あいう', 2);

?>