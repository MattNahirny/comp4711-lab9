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
        $key = $_POST['userid'];
        $user = $this->users->get($key);
        if (password_verify($this->input->post('password'),$user->password)) {
            $this->session->set_userdata('userID',$key);
            $this->session->set_userdata('userName',$user->name);
            $this->session->set_userdata('userRole',$user->role);
        }
        redirect('/');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }
}
