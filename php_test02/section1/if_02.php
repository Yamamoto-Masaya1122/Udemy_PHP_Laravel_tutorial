<?php

$height = 91;

if ($height !== 90) {
  echo '90cmではありません';
}

$test = 1;

if (empty($test)) {
  echo '変数は空です';
} else {
  echo '変数は空ではありません';
}

$signal_1 = 'red';
$signal_2 = 'blue'; 

if ($signal_1 === 'black' && $signal_2 === 'blue') {
  echo '赤と青です';
}

// 三項演算子
// 条件 ? 真 : 偽

$comment = $math > 80 ? 'good' : 'not good';


?>