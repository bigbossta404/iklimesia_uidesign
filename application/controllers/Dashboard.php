<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('dashboard');
    }

    public function akun()
    {
        $this->load->view('akun');
    }
    public function misi()
    {
        $this->load->view('misi');
    }
    public function pengaturan()
    {
        $this->load->view('pengaturan');
    }
    public function tentang()
    {
        $this->load->view('about');
    }
}
