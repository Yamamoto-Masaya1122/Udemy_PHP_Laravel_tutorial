<?php
// common.phpを読み込む
require('common.php');

echo $commonVariable;
// 絶対パスを表示できる
echo __DIR__;

commonTest();

?>