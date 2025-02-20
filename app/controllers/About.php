<?php

class About {

    public function index(string $name = "Adik", $title = "Programer")
    {
        echo "Halo nama saya $name saya adalah $title"; 
    }
    public function Page()
    {
        echo 'about/page';
    }
}