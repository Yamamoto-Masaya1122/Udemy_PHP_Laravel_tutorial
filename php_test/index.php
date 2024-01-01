<?php

// コメントです

/* これもコメントです */
echo 123;
echo '<br>';
echo "こんにちは";
echo '<br>';
echo 'こちらはPHPです';


// 変数
// 動的型付け これは数字だな、じゃintだな。と自動で型付けしてくれる。
$test1 = 123;
$test2 = 456;

// 変数足す変数は文字列になる
echo $test1 . $test2;

// 型と値を吐くメソッド。デバックで使う。
var_dump($test1);
echo $test1;



$test = 123;
phpinfo();
?>