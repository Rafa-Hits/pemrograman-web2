<?php

class Nilai {
    private $tugas;
    private $uts;
    private $uas;

    // Setter
    public function setTugas($tugas) {
        if ($tugas >= 0 && $tugas <= 100) {
            $this->tugas = $tugas;
        } else {
            echo "Nilai tugas harus antara 0 dan 100<br>";
        }
    }

    public function setUts($uts) {
        if ($uts >= 0 && $uts <= 100) {
            $this->uts = $uts;
        } else {
            echo "Nilai UTS harus antara 0 dan 100<br>";
        }
    }

    public function setUas($uas) {
        if ($uas >= 0 && $uas <= 100) {
            $this->uas = $uas;
        } else {
            echo "Nilai UAS harus antara 0 dan 100<br>";
        }
    }

    // Getter
    public function getTugas() {
        return $this->tugas;
    }

    public function getUts() {
        return $this->uts;
    }

    public function getUas() {
        return $this->uas;
    }

    public function getTotalNilai() {
        $totalNilai = 0.3 * $this->tugas + 0.35 * $this->uts + 0.35 * $this->uas;
        return $totalNilai;
    }
}
?>
