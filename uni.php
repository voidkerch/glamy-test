<?php
system('clear');
require './autoload.php';
require './vendor/autoload.php';
use League\Pipeline\Pipeline;

try
{
    $uni = new Uni();
    $pipeline = (new Pipeline())
        ->pipe(new InitCalculatorStage)
        ->pipe(new InitRequestStage)
    ;
    $pipeline->process($uni);
    echo $uni->calculate() . "\n";
}
catch(Exception $e)
{
    die($e->getMessage() . "\n");
}