<?php
use League\Pipeline\StageInterface;
class InitRequestStage implements StageInterface
{
    public function __invoke($payload)
    {
        global $argv;
        if(isset($argv[2]) && $argv[2] === 'mock')
        {
            $payload->request = new HttpRequestMock(Uni::URL);
        }
        else
        {
            $payload->request = new RealHttpRequest(Uni::URL);
        }
        return $payload;
    }
}