<?php
class RequestFactory
{
    public static function factory($url, $mock):IHttpRequest
    {
        if($mock === 'mock')
        {
            return new HttpRequestMock($url);
        }
        return new RealHttpRequest($url);
    }
}