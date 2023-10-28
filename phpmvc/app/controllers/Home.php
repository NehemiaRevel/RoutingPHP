<?php

class Home extends Controller{
    public function index($nama='revel', $pekerjaan='mahasiswa', $judul='Halaman Utama')
    {
        //echo 'home/index';
        $data['nama']=$nama;
        $data['pekerjaan']=$pekerjaan;
        $data['judul']=$judul;
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    public function page($judul='Halaman Revel')
    {
        $data['judul']=$judul;
        $this->view('templates/header',$data);
        $this->view('about/index');
        $this->view('templates/footer');
    }
}