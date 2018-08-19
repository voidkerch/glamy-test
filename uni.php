<?php
system('clear');
require './autoload.php';

try
{
    $calculatorName = $argv[1] ?? CalculatorFactory::$deffaultCalculator;
    $mock = $argv[2] ?? RequestFactory::$deffaulMock;

    $calculator = CalculatorFactory::factory( $calculatorName );
    $request = RequestFactory::factory($mock);

    $result = $calculator->calculate( $request->getData() );

    echo $result . "\n";
}
catch(Exception $e)
{
    die($e->getMessage() . "\n");
}