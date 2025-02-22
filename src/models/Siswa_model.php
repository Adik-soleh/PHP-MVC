<?php

class Siswa_model
{
    // data base handler
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //data sourch name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO(dsn: $dsn, username: 'root', password: '');
        } catch (PDOException $th) {
            die($th->getMessage());
        }
    }



    public function getAllSiswa()
    {
        $this->stmt = $this->dbh->prepare(query: 'SELECT * FROM siswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
