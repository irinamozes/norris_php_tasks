<?php
require 'migration1.php';
$migrat_cat = new CreateCategoryTable();
$migrat_cat->up();

$migrat_good = new CreateGoodsTable();
$migrat_good->up();
