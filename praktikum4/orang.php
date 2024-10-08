<?php

class Orang {
    protected $nama;

    public function setnama($nama) {
        $this->nama = $nama;
    }

    public function getnama() {
        return $this->nama;
    }

    public function ucapkanSalam() {
        echo "Halo, perkenalkan nama saya " . $this->nama . "<br>";
    }
}
?>
