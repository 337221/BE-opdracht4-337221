<?php

class Home extends BaseController
{
    public function index($id = NULL, $name = NULL)
    {

        $data = [
            'title' => '',
        ];

        $this->view('home/index', $data);
    }
}
