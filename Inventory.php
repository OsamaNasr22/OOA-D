<?php

require_once "./Guitar.php";
class Inventory
{

    private array $guitars;
    public function __construct()
    {
        $this->guitars = [];
    }

    public function addGuitar(string $serialNumber, string $builder, string $model, string $type, string $backWood, string $topWood, float $price){
        $guitar = new Guitar($serialNumber, $builder, $model, $type, $backWood, $topWood, $price);
        $this->guitars[] = $guitar;
    }

    /**
     * @param string $serialNumber
     * @return mixed|null
     */
    public function getGuitar(string $serialNumber){
        foreach ($this->guitars as $guitar){
            if ($guitar->getSerialNumber() == $serialNumber)
                return $guitar;
        }
        return  null;
    }

    public function search (Guitar $searchGuitar){
        $matches = [];
        foreach ($this->guitars as $guitar){
            $builder = $searchGuitar->getBuilder();
            if ($builder && $builder!= $guitar->getBuilder()) continue;

            $model = $searchGuitar->getModel();
            if ($model && $model!= $guitar->getModel()) continue;

            $type = $searchGuitar->getType();
            if ($type && $type!= $guitar->getType()) continue;

            $backWood = $searchGuitar->getBackWood();
            if ($backWood && $backWood!= $guitar->getBackWood()) continue;

            $topWood = $searchGuitar->getTopWood();
            if ($topWood && $topWood!= $guitar->getTopWood()) continue;
            $matches[] = $guitar;
        }
        return $matches;
    }
}