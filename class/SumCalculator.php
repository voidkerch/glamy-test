<?php
class SumCalculator implements ICalculator
{
    public function calculate(array $data):int
    {
        $sumData = array_map(function($item)
        {
            return $item->value??0;
        }, $data);
        return array_sum($sumData);
    }
}