<?php

// for, while

for($i = 0; $i < 10; $i++) {
  if ($i === 5) {
    // breakは処理を止める
    // continueはループ処理を飛ばして次のループへ
    continue;
  }
  echo $i;
}

echo '<br>';

// 条件を満たすまでループし続ける
$j = 0;
while($j < 5) {
  echo $j;
  $j++;
}
?>