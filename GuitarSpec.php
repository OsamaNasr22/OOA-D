<?php

class GuitarSpec
{
    private string $builder;
    private string $model;
    private string $type;
    private string $backWood;
    private string $topWood;
    private int $numStrings;

    public function __construct(string $builder, string $model, string $type, string $backWood, string $topWood, int $numStrings)
    {
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
        $this->numStrings = $numStrings;
    }

    public function getBuilder(): string
    {
        return $this->builder;
    }

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

    /**
     * @return int
     */
    public function getNumStrings(): int
    {
        return $this->numStrings;
    }

    public function matches(GuitarSpec $otherSpec) : bool
    {
        if ($this->builder != $otherSpec->getBuilder()) return false;
        if ($this->topWood != $otherSpec->getTopWood()) return false;
        if ($this->backWood != $otherSpec->getBackWood()) return false;
        if ($this->numStrings != $otherSpec->getNumStrings()) return false;
        if ($this->type != $otherSpec->getType()) return false;
        if ($this->model != $otherSpec->getModel()) return false;
        return true;
    }

}