<?php

class Barang {

    public function index()
    {
        echo "From Barang Index";
    }
    public function edit($id, $barang) 
    {
        echo "Edit Barang = $id , $barang";
    }
}