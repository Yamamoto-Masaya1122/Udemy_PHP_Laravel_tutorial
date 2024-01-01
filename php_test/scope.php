<?php
$globalVariable = 'グローバル変数です';

function checkScope() {
  $localVariable = 'ローカル変数です';
  echo $localVariable;
}

echo $globalVariable;
// echo $localVariable; //ローカル変数は定義されている関数内でしか使えない
checkScope();
?>