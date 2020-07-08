<?php 

// include_once '_classes/Articles.php';
// include_once '_classes/Images.php';
// include_once '_classes/Categories.php';
// include_once '_classes/Shop.php';
// $shop = new Shop($id);
$allShop = Shop::getAllShop();
$allImages = Images::getAllImages();
$allCategory = Categories::getAllCategories();

// debug($allShop);
// debug($allImages);
// debug($allCategory);
// $allImages = Images::getAllImages();

// $addressShop = Shop::getAddress();



