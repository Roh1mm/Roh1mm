<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Membuat objek dari class Kerucut
$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;

// Menghitung volume nasi tumpeng
$volume_nasi_tumpeng = $nasi_tumpeng->volume();

// Menampilkan hasil
echo "Volume nasi tumpeng adalah {$volume_nasi_tumpeng} cm³\n";

// Contoh pembuatan objek dari class Lingkaran
$lingkaran = new Lingkaran();
$lingkaran->jari_jari = 7;

$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();

echo "Luas lingkaran adalah {$luas_lingkaran} cm²\n";
echo "Keliling lingkaran adalah {$keliling_lingkaran} cm\n";

// Contoh pembuatan objek dari class Bola
$bola = new Bola();
$bola->jari_jari = 5;

$volume_bola = $bola->volume();

echo "Volume bola adalah {$volume_bola} cm³\n";

// Contoh pembuatan objek dari class Tabung
$tabung = new Tabung();
$tabung->jari_jari = 6;
$tabung->tinggi = 12;

$volume_tabung = $tabung->volume();

echo "Volume tabung adalah {$volume_tabung} cm³\n";

?>
