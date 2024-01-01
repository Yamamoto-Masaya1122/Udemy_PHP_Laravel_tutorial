<?php

// インプットなし
// アウトプット戻り値なし
function test() {
  echo 'テスト';
} 

test();

echo '<br>';

// インプットあり
// アウトプット戻り値あり

$comment = 'コメント2';
$comment3 = 'コメント2';

function getComment($string) {
  echo $string;
} 

getComment($comment);

// 引数2つ、戻り値あり
function sumPrice($int1,$int2) {
  $int3 = $int1 + $int2;
  return $int3;
}

echo '<br>';
$total = sumPrice(3,5);
echo $total;
?>