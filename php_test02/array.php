<?php
$array_1 = ["あああ",2,3];

$array_2 = [
  ['赤', '青','黄'],
  ['緑', '紫', '黒']
];

//echo $array[0];

echo '<pre>';
var_dump($array_2);
echo '</pre>';

echo $array_2[1][1];

//連想配列

$array_member = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];

echo $array_member['name'];
echo '<pre>';
var_dump($array_member);
echo '</pre>';


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

echo $array_member_2['本田']['height'];
echo '<pre>';
var_dump($array_member_2);
echo '</pre>';

$array_member_3 =[
  '1kumi' => [
    '乾' => [
      'height' => 160,
      'hobby' => 'サッカー'
    ],
    '本田' => [
      'height' => 170,
      'hobby' => 'サッカー'
    ]
  ],
  '2kumi' => [
    '大迫' => [
      'height' => 180,
      'hobby' => 'サッカー'
    ],
    '香川' => [
      'height' => 175,
      'hobby' => 'サッカー'
    ]
  ]
];


echo $array_member_3['1kumi']['乾']['height'];
echo '<pre>';
var_dump($array_member_3);
echo '</pre>';

?>