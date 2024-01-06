<?php
// traitは複数継承できる。クラスは一つしか継承できない。

trait ProductTrait{

  public function getProduct(){
    echo 'プロダクト';
  }
}

trait NewsTrait{
  public function getNews(){
    echo 'ニュース';
  }
}

class Product{
  use ProductTrait;
  use NewsTrait;

  public function getInformation(){
    echo 'クラスです';
  }

  // public function getNews(){
  //   echo 'クラスのニュースです'; //オーバーライドも効く
  // }
}

$product = new Product();

$product->getInformation();
echo '<br>';
$product->getProduct();
echo '<br>';
$product->getNews();
echo '<br>';
