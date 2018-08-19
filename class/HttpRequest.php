<?php
abstract class HttpRequest implements IHttpRequest
{
    protected $url;

    protected function parse(string $dataString):array
    {
        $data = json_decode($dataString);
        if(!is_array($data->data)){
            throw new \Exception('Wrong data format.');
        }
        return $data->data;
    }

    public function __construct(String $url)
    {
        $this->url = $url;
    }
}