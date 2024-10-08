<?php

require_once "Buku.php";

class daftarbuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemerograman Web', 'Emely Smith', 'Informatika', '2024'),
            new Buku('Matematika Diskrit', 'Rinaldi Munir', 'Andi Publisher', '2020'),
            new Buku('Dasar Pemrograman', 'Robert T', 'Erlangga', '2019'),
            new Buku('Metodologi Penelitian', 'Jhones W', 'Pustaka UIN', '2023'),
            );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
}