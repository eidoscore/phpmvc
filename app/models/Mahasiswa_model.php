<?php
class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Khaerul Anwar",
    //         "nim" => "2017102078",
    //         "email" => "khoerulanwar523@yahoo.com",
    //         "jurusan" => "Teknik Informatika"

    //     ],
    //     [
    //         "nama" => "Ulfiyatul Khotimah",
    //         "nim" => "2017102068",
    //         "email" => "ulfiyatul@gmail.com",
    //         "jurusan" => "Akutansi"

    //     ],
    //     [
    //         "nama" => "Try Setia",
    //         "nim" => "2017102081",
    //         "email" => "trysn@yahoo.com",
    //         "jurusan" => "Sistem Informasi"

    //     ]
    // ];

    // database handler
    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>