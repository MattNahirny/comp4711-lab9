<?php

class Auth extends Application
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {

        $this->data['pagebody'] = 'login';

        $this->render();
    }

    public function submit()
    {

    }
}
