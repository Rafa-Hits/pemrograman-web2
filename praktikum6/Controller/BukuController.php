<<<<<<< HEAD
<?php

require_once "Model/Daftarbuku.php";

class BukuController{
    public function Jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
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
>>>>>>> 3b5b3c0b9083a871108adbddb789aad6889b1c86
}