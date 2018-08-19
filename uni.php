<?php
system('clear');
require './autoload.php';

try
{
    $calculator = CalculatorFactory::factory( $argv[1] ?? '' );
    $request = RequestFactory::factory( $argv[2] ?? false );
    $result = $calculator->calculate( $request->getData() );
    echo $result . "\n";
}
catch(Exception $e)
{
    die($e->getMessage() . "\n");
}