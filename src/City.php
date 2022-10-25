<?php

class City
{
    private $name;
    private $foundation;
    private $population;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setFoundation($foundation)
    {
        $this->foundation = $foundation;
    }

    public function setPopulation($population)
    {
        $this->population = $population;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFoundation()
    {
        return $this->foundation;
    }

    public function getPopulation()
    {
        return $this->population;
    }
}
