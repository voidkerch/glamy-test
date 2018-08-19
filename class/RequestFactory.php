<?php
class RequestFactory
{
    public static $deffaulMock = false;
    public static $url = 'https://gist.githubusercontent.com/urvalla/d9cc31889a8af9cd36528f81420642af/raw/35f7f827c3db47a801822b824957e676ff5b710c/gistfile1.txt';

    public static function factory($mock):IHttpRequest
    {
        if($mock === 'mock')
        {
            return new HttpRequestMock(self::$url);
        }
        return new RealHttpRequest(self::$url);
    }
}