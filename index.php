<?php
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/typeProducts.php";

// categorie
$category1 = new Category("gatto", "icon");
$category2 = new Category("cane", "icon");

// tipologia
$type1 = new TypeProducts("cuscino per cani", "img", 46, "cuccia", $category2);


var_dump($type1);

?>