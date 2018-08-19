<?php
class RealHttpRequest extends HttpRequest{
    public function getData():array
    {
        return $this->parse(file_get_contents($this->url));
    }
}