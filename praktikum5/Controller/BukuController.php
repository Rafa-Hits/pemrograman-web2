<?php

require_once "Model/Daftarbuku.php";

class BukuController{
    public function Jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }
}