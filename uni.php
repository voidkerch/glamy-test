<?php
system('clear');
require './autoload.php';

try
{
    $args = new Argv();
    $calculator = CalculatorFactory::factory( $args->getArg(1) );
    $request = RequestFactory::factory( $args->getArg(2) );
    $result = $calculator->calculate( $request->getData() );
    echo $result . "\n";
}
catch(Exception $e)
{
    die($e->getMessage() . "\n");
}