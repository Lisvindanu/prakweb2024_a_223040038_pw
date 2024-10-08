<?php
namespace Inheritance1;

require 'komik.php';
require 'game.php';
class produk {
    public $judul,
         $penulis,
         $penerbit,
         $harga,
        $jmlHalaman,
        $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
       $this->jmlHalaman = $jmlHalaman;
       $this->waktuMain = $waktuMain;
    }

    public function getLabel(){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }

    public function getInfoProduct() {
        $str = " {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }
}


$produk1 = new \komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, null, );
$produk2 = new \game("Uncharteed", "Neil Druckmann", "Shounen Jump", 250000, null, 50, );

//Komik : Naruto, Masashi Kishimoto, Shounen Jump, 30000
//Game : Uncharteed, Neil Druckmann, Shounen Jump, 250000
//Naruto | Naruto, Masashi Kishimoto, Shounen Jump, 30000 (Rp. 30000)


// Komik : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) = 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduct();


