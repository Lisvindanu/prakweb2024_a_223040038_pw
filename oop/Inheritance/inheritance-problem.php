<?php
namespace Inheritance1;
require 'CetakInfoProduk.php';
class produk {
    public $judul,
         $penulis,
         $penerbit,
         $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "") {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
       $this->jmlHalaman = $jmlHalaman;
       $this->waktuMain = $waktuMain;
       $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        if($this->tipe == "Komik"){
           $str .= " - {$this->jmlHalaman} Halaman.";
        }elseif ($this->tipe == "Game"){
            $str .= " - {$this->waktuMain} Jam.";
        }
        return $str;
    }
}


$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, null, "Komik");
$produk2 = new produk("Uncharteed", "Neil Druckmann", "Shounen Jump", 250000, null, 50, "Game");

//Komik : Naruto, Masashi Kishimoto, Shounen Jump, 30000
//Game : Uncharteed, Neil Druckmann, Shounen Jump, 250000
//Naruto | Naruto, Masashi Kishimoto, Shounen Jump, 30000 (Rp. 30000)


// Komik : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) = 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


