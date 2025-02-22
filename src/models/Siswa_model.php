<?php

class Siswa_model
{
    private $table = 'siswa';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllSiswa()
    {
        $this->db->query(query: 'SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSiswaById($id)
    {
        $this->db->query(query: 'SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind(param: 'id', value: $id, type: PDO::PARAM_INT);
        return $this->db->single();
    }

    public function tambahDataSiswa($data)
    {
        $query = "INSERT INTO siswa values ('', :name, :nis, :email, :jurusan)";
        $this->db->query(query: $query);
        $this->db->bind(param: 'name', value: $data['name']);
        $this->db->bind(param: 'nis', value: $data['nis']);
        $this->db->bind(param: 'email', value: $data['email']);
        $this->db->bind(param: 'jurusan', value: $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM siswa WHERE id=:id";
        $this->db->query(query: $query);
        $this->db->bind(param: 'id', value: $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSiswa($data)
    {
        $query = "UPDATE siswa SET name=:name, nis=:nis, email=:email, jurusan=:jurusan WHERE id=:id";
        $this->db->query(query: $query);
        $this->db->bind(param: 'name', value: $data['name']);
        $this->db->bind(param: 'nis', value: $data['nis']);
        $this->db->bind(param: 'email', value: $data['email']);
        $this->db->bind(param: 'jurusan', value: $data['jurusan']);
        $this->db->bind(param: 'id', value: $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataSiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM siswa WHERE name LIKE :keyword";    
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
