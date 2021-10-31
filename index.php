<?php
require_once "Inventory.php";
require_once "Guitar.php";
require_once "GuitarSpec.php";
require_once "./Enums/Type.php";
require_once "./Enums/Wood.php";
require_once "./Enums/Builder.php";


function initInventory(Inventory $inventory){
    for ($i = 0 ; $i< 100;$i++){
        $spec = new GuitarSpec(Builder::FENDER, "test{$i}", Type::ACOUSTIC, Wood::INDIAN, Wood::MAPLE,10);
        $inventory->addGuitar($i,  10, $spec);
    }
}

$inventory = new Inventory();
initInventory($inventory);

$spec = new GuitarSpec(Builder::FENDER, "test1", Type::ACOUSTIC, Wood::INDIAN, Wood::MAPLE,10);
$guitar = $inventory->search($spec);
if ($guitar ){
    echo "<pre>";
    print_r($guitar);
    echo "</pre>";
}else{
    echo "Sorry, we have nothing for you";
}