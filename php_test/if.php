<?php

// if (条件) {
//   条件が真なら実行
// } else {
//   条件が偽なら実行
// }

$height = 91;

var_dump($height);
echo '<br>';

if ($height >= 91) {
  echo '身長は'. $height . 'cmです';
} 

if ($height != 90) {
  echo '身長は90cmではありません';
}

echo '<br>';

$signal = 'blue';

if ($signal === 'red') {
  echo '止まれ';
} else if ($signal === 'yellow') {
  echo '一旦停止';
} else {
  echo '進む';
}

echo '<br>';


$test = '1';

if (!empty($test)){
  echo '変数は空ではありません';
}

// 三項演算子
// if else
// 条件 ? 真 : 偽
echo '<br>';

$math = 80;

$comment = $math > 80 ? 'good' : 'bad';
echo $comment;
?>
