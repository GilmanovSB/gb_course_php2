<?php
require '../settings/settings.php';
require ENGINE_DIR . 'Goods.php';
require ENGINE_DIR . 'Sale.php';

$product = new Goods('Apple iPhone XII','This is new iPhone 2020','1000', 'img/iphone.jpg');
$products[] = $product->getGoods();

$product = new Sale('Apple iPhone XII','This is new iPhone 2020','1000', 'img/iphone_sale.jpg', 0.8);
$products[] = $product->getGoods();

require VIEWS_DIR . 'view.php';
?>


