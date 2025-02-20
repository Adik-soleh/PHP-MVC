<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->parseURL();

        if ($url != null && file_exists("../src/controllers/{$url[0]}.php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once "../src/controllers/{$this->controller}.php";
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim(string: $_GET['url'], characters: '/');
            $url = filter_var(value: $url, filter: FILTER_SANITIZE_URL);
            $url = explode(separator: '/', string: $url);
            return $url;
        }
    }


}