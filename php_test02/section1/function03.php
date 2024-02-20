<?php

$postalCode = '123-456';

function checkPostalcode($str){
  $replaced = str_replace('_', '', $str);
  $length = strlen($replaced);
  
  if ($length ===7){
    return true;
  }
  return false;
}

var_dump(checkPostalcode($postalCode));


?>