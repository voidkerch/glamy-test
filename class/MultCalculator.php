<?php
class MultCalculator implements ICalculator
{
    public function calculate(array $data):int
    {
        $productData = [];
        foreach($data as $key => $item)
        {
            if($key % 2 === 0)
            {
                $productData[] = $item->alt ?? 1;
            }
            else
            {
                $productData[] = $item->value ?? 1;
            }
        }
        return array_product($productData);
    }
}