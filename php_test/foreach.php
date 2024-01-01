<?php

// 複数の値 foreach

$members = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];

// バリューのみ表示
foreach ($members as $member) {
  echo $member;
  echo '<br>';
}

echo '<br>';
// キー、バリュー表示
foreach ($members as $key => $value) {
  echo $key . 'は' . $value . 'です';
  echo '<br>';
}


// 二次元の連想配列の場合
$members_2 = [
  '本田' => [
    'height' => 170,
    'hobby' => 'サッカー'
  ],
  '香川' => [
    'height' => 165,
    'hobby' => 'サッカー'
  ]
];

foreach($members_2 as $member_1) {
  foreach($member_1 as $member) {
    echo $member;
    echo '<br>';
  }
}





?>