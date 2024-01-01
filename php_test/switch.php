<?php

// switch
// if文の方がいい

$date = 1;

switch($date) {
  case 1:
    echo '1です';
    break;
  case 2:
    echo '2です';
    break;
  case 3:
    echo '3です';
    break;
  default:
    echo '1-3ではありません';
    break;
}

// breakを一回ずつ書かないといけない
// 型を厳密に定義しないと、自動で型で判別することができない
// だからifを使う方がいい
?>