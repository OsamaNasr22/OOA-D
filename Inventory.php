<?php

require_once "./Guitar.php";
require_once "./GuitarSpec.php";
class Inventory
{

    private array $guitars;
    public function __construct()
    {
        $this->guitars = [];
    }

    public function addGuitar(string $serialNumber, float $price, GuitarSpec $guitarSpec){
        $guitar = new Guitar($serialNumber,$price, $guitarSpec);
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

    public function search (GuitarSpec $guitarSpec){
        $matches = [];
        foreach ($this->guitars as $guitar){
            $builder = $guitarSpec->getBuilder();
            if ($builder && $builder!= $guitar->getGuitarSpec()->getBuilder()) continue;

            $model = $guitarSpec->getModel();
            if ($model && $model!= $guitar->getGuitarSpec()->getModel()) continue;

            $type = $guitarSpec->getType();
            if ($type && $type!= $guitar->getGuitarSpec()->getType()) continue;

            $backWood = $guitarSpec->getBackWood();
            if ($backWood && $backWood!= $guitar->getGuitarSpec()->getBackWood()) continue;

            $topWood = $guitarSpec->getTopWood();
            if ($topWood && $topWood!= $guitar->getGuitarSpec()->getTopWood()) continue;
            $matches[] = $guitar;
        }
        return $matches;
    }
}