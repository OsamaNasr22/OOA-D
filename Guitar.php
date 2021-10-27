<?php

class Guitar
{

    private string $serialNumber;
    private string $builder;
    private string $model;
    private string $type;
    private string $backWood;
    private string $topWood;
    private float $price;
    public function __construct(string $serialNumber, string $builder, string $model, string $type, string $backWood, string $topWood, float $price)
    {

        $this->serialNumber = $serialNumber;
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     */
    public function setSerialNumber(string $serialNumber): void
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * @return string
     */
    public function getBuilder(): string
    {
        return $this->builder;
    }

    /**
     * @param string $builder
     */
    public function setBuilder(string $builder): void
    {
        $this->builder = $builder;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getBackWood(): string
    {
        return $this->backWood;
    }

    /**
     * @param string $backWood
     */
    public function setBackWood(string $backWood): void
    {
        $this->backWood = $backWood;
    }

    /**
     * @return string
     */
    public function getTopWood(): string
    {
        return $this->topWood;
    }

    /**
     * @param string $topWood
     */
    public function setTopWood(string $topWood): void
    {
        $this->topWood = $topWood;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }


}