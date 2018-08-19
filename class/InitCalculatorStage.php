<?php
use League\Pipeline\StageInterface;
class InitCalculatorStage implements StageInterface
{
    public static $CALCULATERS = [
        'sum' => 'SumCalculator',
        'multiply' => 'MultCalculator',
    ];

    public function __invoke($payload)
    {
        global $argv;
        if(!isset($argv[1]))
        {
            $class = current(self::$CALCULATERS);
            $payload->calculator = new $class();
        }
        elseif(key_exists($argv[1], self::$CALCULATERS))
        {
            $class = self::$CALCULATERS[$argv[1]];
            $payload->calculator = new $class();
        }
        else
        {
            throw new \Exception('Calculator '.$argv[1].' does not exist.');
        }
        return $payload;
    }
}