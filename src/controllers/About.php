<?php

class About extends Controller
{

    public function index(string $name = "Parjo", string $job = "Onacang")
    {
        $data['name'] = $name;
        $data['job'] = $job;
        $data['title'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['title'] = 'About Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}