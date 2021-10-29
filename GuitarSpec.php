<?php

class GuitarSpec
{
    private string $builder;
    private string $model;
    private string $type;
    private string $backWood;
    private string $topWood;

    /**
     * @param string $builder
     * @param string $model
     * @param string $type
     * @param string $backWood
     * @param string $topWood
     */
    public function __construct(string $builder, string $model, string $type, string $backWood, string $topWood)
    {
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
    }


    /**
     * @return string
     */
    public function getBuilder(): string
    {
        return $this->builder;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getBackWood(): string
    {
        return $this->backWood;
    }

    /**
     * @return string
     */
    public function getTopWood(): string
    {
        return $this->topWood;
    }
}