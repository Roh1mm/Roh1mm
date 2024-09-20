<?php

namespace App\Model\Akademik;

class Pegawai {
    public int $nip;
    protected string $nama;
    protected int $no_hp;
    protected string $alamat;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn(): bool {
        // Implementasi cek in, contoh return true untuk berhasil
        return true;
    }

    public function cekOut(): bool {
        // Implementasi cek out, contoh return true untuk berhasil
        return true;
    }

    public function getNoHp(): int {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp): void {
        $this->no_hp = $no_hp;
    }
}
