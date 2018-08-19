<?php
class Argv
{
    private $argv;
    public function __construct()
    {
        if(!ini_get("register_argc_argv"))
        {
            throw new \Exception('register_argc_argv disabled.');
        }
        global $argv;
        $this->argv = $argv;
    }

    public function getArg(int $index):string
    {
        return $this->argv[$index] ?? '';
    }
}