<<<<<<< HEAD
<?php

class Buku{
    protected $judul;
    protected $pengarang;
    protected $penerbit;
    protected $tahun;

    public function __construct($judul, $pengarang, $penerbit, $tahun)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun = $tahun;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getPengarang(){
        return $this->pengarang;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function getTahun(){
        return $this->tahun;
    }
=======
<?php

class Buku{
    protected $judul;
    protected $pengarang;
    protected $penerbit;
    protected $tahun;

    public function __construct($judul, $pengarang, $penerbit, $tahun)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun = $tahun;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getPengarang(){
        return $this->pengarang;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function getTahun(){
        return $this->tahun;
    }
>>>>>>> 3b5b3c0b9083a871108adbddb789aad6889b1c86
}