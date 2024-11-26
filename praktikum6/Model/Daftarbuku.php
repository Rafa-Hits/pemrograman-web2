<<<<<<< HEAD
<?php

require_once "Buku.php";
require_once "Database/database.php";
class daftarbuku{

    public function getData(){
       $db = new Database();
       $koneksi = $db->getKoneksi();

       $daftar_buku = [];

       $sql = "SELECT * FROM buku";
        $query = $koneksi->query ($sql);

        if($query->num_rows >0){
            while($row = $query->fetch_assoc()){
                $buku = new Buku ($row['judul'], $row['pengarang'], $row['penerbit'], $row['Tahun']);
                array_push($daftar_buku, $buku);
            }
        }
        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
=======
<?php

require_once "Buku.php";
require_once "Database/database.php";
class daftarbuku{

    public function getData(){
       $db = new Database();
       $koneksi = $db->getKoneksi();

       $daftar_buku = [];

       $sql = "SELECT * FROM buku";
        $query = $koneksi->query ($sql);

        if($query->num_rows >0){
            while($row = $query->fetch_assoc()){
                $buku = new Buku ($row['judul'], $row['pengarang'], $row['penerbit'], $row['Tahun']);
                array_push($daftar_buku, $buku);
            }
        }
        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
>>>>>>> 3b5b3c0b9083a871108adbddb789aad6889b1c86
}