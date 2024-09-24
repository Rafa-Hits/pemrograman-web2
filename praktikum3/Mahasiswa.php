<?php

include "orang.php";

class Mahasiswa extends Orang{
    public $nim;
    public $prodi;

    public function getNilaisemester(){

    }

}

class MahasiswaAsing extends Mahasiswa{

    //override
    public function ucapkanSalam()
    {
        echo "Hello My Name " . $this->nama . "<br>";
    }
}