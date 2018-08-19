<?php
class HttpRequestMock extends HttpRequest
{
    public function getData():array
    {
        return $this->parse('{"data": [ {"value": 1}, {"value": 2, "alt": 6}, {"value": 10, "alt": 5} ]}');
    }
}