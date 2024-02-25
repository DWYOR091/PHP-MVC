<?php

class About extends Controller
{
    public function index($nama = 'rifqi', $pekerjaan = 'gamer', $umur = 21)
    {
        //array asosiatif
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}
