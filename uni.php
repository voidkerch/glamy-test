<?php
system('clear');
require './autoload.php';

try
{
    $url = 'https://gist.githubusercontent.com/urvalla/d9cc31889a8af9cd36528f81420642af/raw/35f7f827c3db47a801822b824957e676ff5b710c/gistfile1.txt';
    $calculatorName = $argv[1] ?? CalculatorFactory::$deffaultCalculator;
    $mock = $argv[2] ?? false;
    $calculator = CalculatorFactory::factory($calculatorName);
    $request = RequestFactory::factory($url, $mock);
    $result = $calculator->calculate( $request->getData() );
    echo $result . "\n";
}
catch(Exception $e)
{
    die($e->getMessage() . "\n");
}