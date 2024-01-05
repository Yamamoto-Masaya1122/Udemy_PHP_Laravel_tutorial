<?php

class Product {
  //アクセス修飾子, private(外からアクセスできない)、protected(自分,継続),
  //変数
  private $product = [];


  //関数
  function __construct($product) {
    $this->product = $product; //$thisはこのクラスを指す。ここではProductクラスのproductという変数
  }

  public function getProduct() {
    echo $this->product;
  }

  public function addProduct($item) {
    $this->product .= $item; // .=は追加するという意味
  }

  public static function getStaticProduct($str) {
    echo $str;
  }
}

$instance = new Product('テスト');

var_dump($instance);

$instance->getProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

// 静的(static) クラス名の後にコロン2つ
Product::getStaticProduct('静的');
echo '<br>';

