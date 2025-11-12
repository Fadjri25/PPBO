<?php
// Memanggil definisi class Segitiga
require_once 'class_segitiga.php';

// --- Contoh 1: Segitiga Sama Kaki ---
// Data: Alas: 10, Tinggi: 8, Sisi: 6, 8, 6
// Catatan: Sisi yang dipakai untuk keliling adalah A, B, C.
// Di contoh output, Sisi: 6, 8, 6. Keliling: 6 + 8 + 6 = 20. Jenis: Sama Kaki.
// Luas: 0.5 * Alas * Tinggi = 0.5 * 10 * 8 = 40.

$segitiga1 = new Segitiga(10, 8, 6, 8, 6);
echo $segitiga1->getStatus();

// --- Contoh 2: Segitiga Sama Sisi ---
// Data: Alas: 5, Tinggi: 4.33, Sisi: 5, 5, 5
// Catatan: Keliling: 5 + 5 + 5 = 15. Jenis: Sama Sisi.
// Luas: 0.5 * Alas * Tinggi = 0.5 * 5 * 4.33 = 10.825.
// Kita gunakan nilai float yang lebih presisi (4.330127) untuk 'tinggi'
// agar perhitungan luas dan tinggi lebih cocok dengan sisi 5 (tinggi segitiga sama sisi)
$tinggiSamaSisi = sqrt(5*5 - (5/2)*(5/2)); // sekitar 4.330127
$segitiga2 = new Segitiga(5, 4.330127, 5, 5, 5);
echo $segitiga2->getStatus();

// --- Contoh Tambahan: Segitiga Sembarang ---
// Data: Alas: 4, Tinggi: 3, Sisi: 3, 4, 5 (Segitiga Siku-siku, jenis Sembarang)
$segitiga3 = new Segitiga(4, 3, 3, 4, 5);
echo $segitiga3->getStatus();
?>
