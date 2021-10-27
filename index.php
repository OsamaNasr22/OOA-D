<?php
require_once "Inventory.php";
require_once "Guitar.php";


function initInventory(Inventory $inventory){
    for ($i = 0 ; $i< 100;$i++){
        $inventory->addGuitar(uniqid(), "builder{$i}", "fender{$i}", "test", "test", "test", (float)rand(1, 1000));
    }
}

$inventory = new Inventory();
initInventory($inventory);

$guitar = new Guitar("", "fender", "stratocastor", "electric", "alder", "alder",0);
$guitar = $inventory->search($guitar);
if ($guitar ){
    echo "<pre>";
    print_r($guitar);
    echo "</pre>";
}else{
    echo "Sorry, we have nothing for you";
}