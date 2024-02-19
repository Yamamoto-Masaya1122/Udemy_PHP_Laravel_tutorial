<?php

$members = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];
//バリューのみ表示
foreach($members as $member) {
  echo $member;
}


//キーとバリューそれぞれ表示
foreach($members as $key => $value) {
  echo $key . 'は' . $value;
}

$array_member_2 =[
  '本田' => [
    'height' => 170,
    'hobby' => 'サッカー'
  ],
  '香川' => [
    'height' => 175,
    'hobby' => 'サッカー'
  ]
];

foreach($array_member_2 as $member_2) {
  foreach($member_2 as $member => $value){
    echo $member . 'は' . $value;
  }
}

?>