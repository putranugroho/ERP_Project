<?php

class User extends CI_Controller
{
    public function user_id()
    {
        $this->template->load('template', 'user/user_id');
    }

    public function user_akses()
    {
        $this->template->load('template', 'user/user_akses');
    }
}
