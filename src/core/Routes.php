<?php

class Routes
{
    private $controllerFile = 'DefaultApp';
    private $controllerMethod = 'index';
    private $params = [];

    public function run()
    {
        $url = $this->getUrl();
        if ($url && file_exists(__DIR__ . "/../controllers/{$url[0]}.php")) {
            $this->controllerFile = $url[0];
            unset($url[0]);
        }

        require_once __DIR__ . "/../controllers/{$this->controllerFile}.php";
        $this->controllerFile = new $this->controllerFile;

        if (isset($url[1])) {
            if (method_exists($this->controllerFile, $url[1])) {
                $this->controllerMethod = $url[1];
                unset($url[1]);
            }
        }

        if(!empty($url)){
            $this->params = array_values($url);
        }

        call_user_func_array(callback: [$this->controllerFile, $this->controllerMethod], args: $this->params);
    }

    private function getUrl()
    {
        $url = rtrim(string: $_SERVER['QUERY_STRING'], characters: '/');
        $url = filter_var(value: $url, filter: FILTER_SANITIZE_URL);
        $url = explode(separator: '/', string: $url);
        return $url;
    }
}