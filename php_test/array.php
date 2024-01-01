<?php

// 配列は数字と値がセット
$array = [1,2,3];

var_dump($array);



// 連想配列はキーと値がセット
// キー => 値

$array_member = [
  'name' => '本田',
  'height' => '170',
  'hobby' => 'サッカー'
];

echo $array_member['hobby'];

echo '<br>';

$array_member_2 = [
  '本田' => [
    'height' => 170,
    'hobby' => 'サッカー'
  ],
  '香川' => [
    'heighy' => 165,
    'hobby' => 'サッカー'
  ]
];

var_dump($array_member_2);

echo '<br>';

$array_member_3 = [
  '1kumi' => [
    '本田' => [
      'height' => 170,
      'hobby' => 'サッカー'
      ],
    '香川' => [
      'heighy' => 165,
      'hobby' => 'サッカー'
      ]
    ],
  '2kumi' => [
    '長友' => [
      'height' => 170,
      'hobby' => 'サッカー'
    ]
  ]
];

var_dump($array_member_3);
?>