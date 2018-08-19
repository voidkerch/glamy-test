<?php
interface IHttpRequest
{
    public function __construct(String $url);

    public function getData():array;
}