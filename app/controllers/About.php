<?php


class About extends Controller {
    public function index($nama = 'anwar',$pekerjaan = 'Mahasiswa', $umur = 23)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }


    public function page()
    {
        $data['judul'] = 'My Page';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}

?>