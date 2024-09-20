<?php

// Meng-include file Dosen.php yang berada di folder App/Admin
require_once 'vendor/autoload.php';

use App\Model\Akademik\Dosen;

// Membuat objek baru dari class Dosen
$dian = new Dosen(
    1984111320150401001,   // NIP
    "Dian Prawira",        // Nama
    62111111,              // No HP
    "Jln Purnama",         // Alamat
    "0013118405"           // NIDN
);

// Menjalankan fungsi mengajar
$dian->mengajar();


