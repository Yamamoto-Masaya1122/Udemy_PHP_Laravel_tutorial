<?php



function test() {
  echo 'テスト';
}

test();

$comment = 'コメント2';
$comment3 = 'コメント3';



function getComment($string){
  echo $string;
}

getComment($comment3);

function getNumberOfComment(){
  return 5;
}

$commentNumber = getNumberOfComment();

echo $commentNumber;

function sumPrice($int1, $int2){
  $int3 = $int1 + $int2;
  return $int3;
}

$total = sumPrice(3,3);

echo $total;


?>