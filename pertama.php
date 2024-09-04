<?php
date_default_timezone_set('Asia/Jakarta');
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');

if ($waktu >= 5 && $waktu < 11) {
    echo "Selamat pagi {$nama}";
} elseif ($waktu >= 11 && $waktu < 15) {
    echo "Selamat siang {$nama}";
} elseif ($waktu >= 15 && $waktu < 19) {
    echo "Selamat sore {$nama}";
} else {
    echo "Selamat malam {$nama}";
}
echo " sekarang pukul {$waktu}\n";
?>
