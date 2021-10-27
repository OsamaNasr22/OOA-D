<?php
require_once "Inventory.php";
require_once "Guitar.php";
require_once "./Enums/Type.php";
require_once "./Enums/Wood.php";
require_once "./Enums/Builder.php";


function initInventory(Inventory $inventory){
    for ($i = 0 ; $i< 100;$i++){
        $inventory->addGuitar($i, Builder::FENDER, "test{$i}", Type::ACOUSTIC, Wood::INDIAN,Wood::MAPLE,  10);
    }
}

$inventory = new Inventory();
initInventory($inventory);

$guitar = new Guitar(1, Builder::FENDER, "test1", Type::ELECTRIC, Wood::INDIAN, Wood::INDIAN,10);
$guitar = $inventory->search($guitar);
if ($guitar ){
    echo "<pre>";
    print_r($guitar);
    echo "</pre>";
}else{
    echo "Sorry, we have nothing for you";
}