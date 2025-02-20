<?php

class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];
    public function __construct()
    {

        $url = $this->parsUrl();

        if (file_exists('../app/controllers/'. $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists(object_or_class: $this->controller, method: $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)) {
            $this->params = array_values(array: $url);
        }

        call_user_func_array(callback: [$this->controller, $this->method], args: $this->params);
    }

    public function parsUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim(string: $_GET['url'], characters: '/');
            $url = filter_var(value: $url, filter: FILTER_SANITIZE_URL);
            $url = explode(separator: '/', string: $url);
            return $url;
        }
    }

}