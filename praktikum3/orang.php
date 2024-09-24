<?php

class orang{
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function ucapkanSalam(){
        echo "Assalamualaikum perkenalkan nama saya ". $this->nama . "<br>";
    }
}
