<?php

class Siswa_model
{
    private $siswa = [
        [
            "nama" => "Daffa",
            "nis" => "213040068",
            "email" => 'dafa@gmail.com',
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Adi",
            "nis" => "213068795",
            "email" => 'adi@gmail.com',
            "jurusan" => "Multimedia"
        ],
        [
            "nama" => "Dewi",
            "nis" => "213052589",
            "email" => 'dewi@gmail.com',
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Rizky",
            "nis" => "213045678",
            "email" => 'rizky@gmail.com',
            "jurusan" => "Sistem Informasi"
        ],
        [
            "nama" => "Siti",
            "nis" => "213078912",
            "email" => 'siti@gmail.com',
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Budi",
            "nis" => "213012345",
            "email" => 'budi@gmail.com',
            "jurusan" => "Multimedia"
        ],
        [
            "nama" => "Rina",
            "nis" => "213056789",
            "email" => 'rina@gmail.com',
            "jurusan" => "Sistem Informasi"
        ],
        [
            "nama" => "Agus",
            "nis" => "213034567",
            "email" => 'agus@gmail.com',
            "jurusan" => "Teknik Komputer"
        ],
        [
            "nama" => "Fajar",
            "nis" => "213098765",
            "email" => 'fajar@gmail.com',
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Lina",
            "nis" => "213067890",
            "email" => 'lina@gmail.com',
            "jurusan" => "Multimedia"
        ],
        [
            "nama" => "Andi",
            "nis" => "213023456",
            "email" => 'andi@gmail.com',
            "jurusan" => "Sistem Informasi"
        ],
        [
            "nama" => "Tina",
            "nis" => "213034908",
            "email" => 'tina@gmail.com',
            "jurusan" => "Teknik Informatika"
        ],
    ];
    


    public function getAllSiswa()
    {
        return $this->siswa;
    }

}
