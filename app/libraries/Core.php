<?php
/*
* App core class
 * create url and loads core controller
 * URL Formats - controller/method/params
*/


class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $currentParams = [];

    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        echo $_GET['url'];
    }
}