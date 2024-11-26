<<<<<<< HEAD
<?php

require_once "Model/Daftarbuku.php";

class BukuController {
    public function Jalankan() {
        // Mengakses model
        $data = new DaftarBuku();

        // Memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan() {
        // Cek apakah data POST tersedia
        if (isset($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun'])) {
            // Membuat objek buku dengan data POST
            $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

            // Menyimpan buku ke dalam daftar buku
            $daftar_buku = new DaftarBuku();
            $daftar_buku->simpan($buku);

            // Redirect ke halaman utama setelah menyimpan
            header('Location: http://localhost/index.php');
            exit;
        } else {
            // Tangani kasus ketika data POST tidak lengkap
            echo "Data tidak lengkap. Pastikan semua kolom terisi.";
        }
    }

    public function hapus() {
        // Cek apakah data POST tersedia
        if (isset($_POST['id_hapus'])) {
            // Mengambil ID dari data POST
            $id = $_POST['id_hapus'];

            // Menghapus buku dari daftar
            $daftar_buku = new DaftarBuku();
            $daftar_buku->hapus($id);

            // Redirect ke halaman utama setelah menghapus
            header('Location: http://localhost/index.php');
            exit;
        } else {
            // Tangani kasus ketika ID tidak dikirim
            echo "ID tidak ditemukan. Gagal menghapus data.";
        }
    }
}
=======
<?php

require_once "Model/Daftarbuku.php";

class BukuController{
    public function Jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('location: http://Localhost/index.php');
        exit;

    }

    public function hapus(){
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('location: http://Localhost/index.php');
        exit;

}

}
>>>>>>> 3b5b3c0b9083a871108adbddb789aad6889b1c86
