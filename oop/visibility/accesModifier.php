<?php
namespace visibility;



require 'game.php';
require 'komik.php';

class produk {
    public $judul,
         $penulis,
         $penerbit;

    protected $diskon;

    private  $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
    }




    public function getLabel(){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getInfoProduct() {
        $str = " {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }
}


$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100 );
$produk2 = new game("Uncharteed", "Neil Druckmann", "Shounen Jump", 250000, 50 );


echo $produk1->getInfoProduct();
echo "<br>";
echo $produk2->getInfoProduct();
echo "<hr>";


$produk2->setDiskon(40);
echo "Harga : " . $produk2->getHarga();


