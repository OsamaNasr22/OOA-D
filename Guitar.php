<?php

class Guitar
{

    private string $serialNumber;
    private float $price;
    private GuitarSpec $guitarSpec;

    /**
     * @param string $serialNumber
     * @param float $price
     * @param GuitarSpec $guitarSpec
     */
    public function __construct(string $serialNumber, float $price, GuitarSpec $guitarSpec)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->guitarSpec = $guitarSpec;
    }

    /**
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return GuitarSpec
     */
    public function getGuitarSpec(): GuitarSpec
    {
        return $this->guitarSpec;
    }


}