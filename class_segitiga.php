<?php

class Segitiga {
    // Properti (Attributes) - dibuat Private agar hanya bisa diakses didalam class
    private $alas;
    private $tinggi;
    private $sisiA;
    private $sisiB;
    private $sisiC;

    /**
     * Constructor untuk inisialisasi properti segitiga
     * @param float $alas
     * @param float $tinggi
     * @param float $sisiA
     * @param float $sisiB
     * @param float $sisiC
     */
    public function __construct($alas, $tinggi, $sisiA, $sisiB, $sisiC) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisiA = $sisiA;
        $this->sisiB = $sisiB;
        $this->sisiC = $sisiC;
    }

    // Metode (Methods) - dibuat Public agar bisa diakses dari luar class

    /**
     * Menghitung Luas Segitiga (0.5 * alas * tinggi)
     * @return float Luas Segitiga
     */
    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    /**
     * Menghitung Keliling Segitiga (sisiA + sisiB + sisiC)
     * @return float Keliling Segitiga
     */
    public function hitungKeliling() {
        return $this->sisiA + $this->sisiB + $this->sisiC;
    }

    /**
     * Mengecek Jenis Segitiga berdasarkan panjang sisi
     * @return string Jenis Segitiga (Sama Sisi, Sama Kaki, Sembarang)
     */
    public function cekJenis() {
        $a = $this->sisiA;
        $b = $this->sisiB;
        $c = $this->sisiC;

        // Cek Sama Sisi: Ketiga sisinya sama panjang
        // Menggunakan epsilon (misalnya 0.0001) untuk perbandingan float
        if (abs($a - $b) < 0.0001 && abs($b - $c) < 0.0001) {
            return "Sama Sisi";
        }
        // Cek Sama Kaki: Dua dari tiga sisinya sama panjang
        // Menggunakan abs() dan operator perbandingan untuk float
        elseif (abs($a - $b) < 0.0001 || abs($b - $c) < 0.0001 || abs($a - $c) < 0.0001) {
            return "Sama Kaki";
        }
        // Cek Sembarang: Ketiga sisinya berbeda panjang
        else {
            return "Sembarang";
        }
    }

    /**
     * Mengembalikan informasi lengkap segitiga dalam format string
     * @return string Informasi Segitiga
     */
    public function getStatus() {
        $info = "===== INFORMASI SEGITIGA ======\n";
        $info .= "Alas : " . $this->alas . "\n";
        $info .= "Tinggi : " . $this->tinggi . "\n";
        $info .= "Sisi : " . $this->sisiA . ", " . $this->sisiB . ", " . $this->sisiC . "\n";
        // Memformat output Luas dan Keliling agar lebih rapi
        $info .= "Luas : " . number_format($this->hitungLuas(), 2, '.', '') . "\n"; // Format 2 desimal
        $info .= "Keliling : " . number_format($this->hitungKeliling(), 2, '.', '') . "\n"; // Format 2 desimal
        $info .= "Jenis: " . $this->cekJenis() . "\n";
        $info .= "===============================\n";
        return $info;
    }

    // Getter methods (walaupun tidak diminta, ini adalah praktik baik)
    public function getAlas() { return $this->alas; }
    public function getTinggi() { return $this->tinggi; }
    public function getSisiA() { return $this->sisiA; }
    public function getSisiB() { return $this->sisiB; }
    public function getSisiC() { return $this->sisiC; }
}
?>
