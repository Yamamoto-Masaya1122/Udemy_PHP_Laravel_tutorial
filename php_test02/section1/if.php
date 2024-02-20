<?php

// if (条件) {
//   条件が真なら実行
// }

$height = 90;

var_dump($height);

if ($height === 90) {
  echo '身長は' . $height . 'cmです';
}

if ($height === 100) {
  echo '身長は' . $height . 'cmです';
} else if ($height === 90) {
  echo '身長は' . $height . 'cmです';
}

$speed = 90;
$signal = 'blue';

if ($signal === 'blue') {
  if ($speed >= 90) {
    echo 'スピード違反';
  }
} 

?>