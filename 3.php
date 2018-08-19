<?php
system('clear');
require './autoload.php';

try
{
    $calculator = CalculatorFactory::factory( 'multiply' );
    $request = RequestFactory::factory(false);

    $result = $calculator->calculate( $request->getData() );

    echo $result . "\n";
}
catch(Exception $e)
{
    die($e->getMessage() . "\n");
}