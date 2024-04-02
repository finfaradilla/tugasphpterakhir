<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $universitas;
    public $nilai;

    public function __construct($nim, $nama, $universitas, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->universitas = $universitas;
        $this->nilai = $nilai;
    }

    public function calculateGrade() {
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 75) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } elseif ($this->nilai >= 40) {
            return 'D';
        } else {
            return 'E';
        }
    }

    public function determineStatus() {
        return ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }

    public function determinePredikat() {
        switch ($this->calculateGrade()) {
            case 'A':
                return 'Sangat Memuaskan';
            case 'B':
                return 'Memuaskan';
            case 'C':
                return 'Cukup';
            case 'D':
                return 'Kurang';
            case 'E':
                return 'Sangat Kurang';
            default:
                return 'Tidak Ada Predikat';
        }
    }
}

?>
