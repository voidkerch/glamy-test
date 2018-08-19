<?php
class CalculatorFactory
{
    public static $CALCULATERS = [
        'sum' => 'SumCalculator',
        'multiply' => 'MultCalculator',
    ];

    public static $deffaultCalculator = 'sum';

    public static function factory($name):ICalculator
    {
        if(!key_exists($name, self::$CALCULATERS))
        {
            throw new \Exception('Calculator '.$name.' does not exist.');
        }
        $class = self::$CALCULATERS[$name];
        return new $class();
    }
}