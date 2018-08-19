<?php
function autoloader($class)
{
    try
    {
        $path = './class/'.$class . '.php';
        if (!file_exists($path))
        {
            throw new \Exception('File ' . $path . ' does not exist');
        }
        include $path;
    }
    catch(Exception $e)
    {
        die($e->getMessage() . "\n");
    }
}
spl_autoload_register('autoloader');