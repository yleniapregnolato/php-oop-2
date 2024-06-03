<?php
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/typeProducts.php";

// categorie
$category1 = new Category("gatto", "icon");
$category2 = new Category("cane", "icon");

// tipologia
$type1 = new TypeProducts("cuscino per cani", "cuscino.jpeg", 46, "cuccia", $category2);
$type2 = new TypeProducts("croccantini per gatto", "img", 25, "cibo", $category1);
$type3 = new TypeProducts("pallina in gomma", "img", 3, "giochi", $category2);

?>