<?php

class Arr
{
    private $numbers = [];

    public function add($array)
    {
        for ($i = 0; $i < count($array); $i++) {
            $this->numbers[] = $array[$i];
        }
    }
    public function getSum()
    {
        return array_sum($this->numbers);
    }

    public function getAvg()
    {
        return array_sum($this->numbers) / count($this->numbers);
    }
}
