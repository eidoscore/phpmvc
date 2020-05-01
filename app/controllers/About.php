<?php


class About {
    public function index($nama = 'anwar',$pekerjaan = 'Mahasiswa')
    {
        echo "Halo Saya $nama, Saya seorang $pekerjaan";
    }


    public function page()
    {
        echo 'about/page';
    }
}

?>