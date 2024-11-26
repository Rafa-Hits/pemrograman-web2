<<<<<<< HEAD
<?php

require_once "orang.php";
require_once "nilai.php";

class Mahasiswa extends Orang {
    protected string $nim;
    protected Nilai $nilai;

    public function setnim($nim) {
        $this->nim = $nim;
    }

    public function setnilai($nilai) {
        $this->nilai = $nilai;
    }

    public function getnim() {
        return $this->nim;
    }

    public function getnilai() {
        return $this->nilai;
    }

    public function tampilkanData() {
        echo "Nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS : " . $this->nilai->getUts() . "<br>";
        echo "Nilai UAS : " . $this->nilai->getUas() . "<br>";
        echo "Total Nilai : " . $this->nilai->getTotalNilai() . "<br>";
    }
}
=======
<?php

require_once "orang.php";
require_once "nilai.php";

class Mahasiswa extends Orang {
    protected string $nim;
    protected Nilai $nilai;

    public function setnim($nim) {
        $this->nim = $nim;
    }

    public function setnilai($nilai) {
        $this->nilai = $nilai;
    }

    public function getnim() {
        return $this->nim;
    }

    public function getnilai() {
        return $this->nilai;
    }

    public function tampilkanData() {
        echo "Nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS : " . $this->nilai->getUts() . "<br>";
        echo "Nilai UAS : " . $this->nilai->getUas() . "<br>";
        echo "Total Nilai : " . $this->nilai->getTotalNilai() . "<br>";
    }
}
>>>>>>> 3b5b3c0b9083a871108adbddb789aad6889b1c86
