<?php
system('clear');
require './autoload.php';

try
{
    $calculator = CalculatorFactory::factory( 'sum' );
    $request = RequestFactory::factory();
    $result = $calculator->calculate( $request->getData() );
    echo $result . "\n";
}
catch(Exception $e)
{
    die($e->getMessage() . "\n");
}