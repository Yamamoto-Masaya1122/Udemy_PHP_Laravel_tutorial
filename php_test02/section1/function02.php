<?php

//UTF-8という規格が一般的。日本語は3~6バイト。1文字3バイトと言われている。mb_をつけないと数バグる。

$text = 'あいうえお';

echo mb_strlen($text);

//文字列の置換

$str = '文字列を置換します';

echo str_replace('置換', 'ちかん', $str);

$str_2 = '指定文字列で、分割します';

echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';

$str_3 = '特定の文字列が含まれるか確認する';

echo preg_match('/文字列/' , $str_3);

echo substr('かきくけこ', 1);
echo mb_substr('かきくけこ', 1);


$array = ['りんご', 'みかん'];

array_push($array, '葡萄', 'なし');

echo '<pre>';
var_dump($array);
echo '</pre>';


?>