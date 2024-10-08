<?php
namespace setterGetter;

use gameOveriding\game;
use Komikmikoveriding\komik;

require 'komik.php';
require 'game.php';
class produk {
    private $judul,
         $penulis,
         $penerbit,
        $harga;

    protected $diskon;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
       $this->judul = $judul;
       $this->penulis = $penulis;
       $this->penerbit = $penerbit;
       $this->harga = $harga;
    }

    public function setJudul($judul) {
        if(!is_string($judul)) {
            throw new \Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis(): mixed
    {
        return $this->penulis;
    }

    public function setPenulis(mixed $penulis): void
    {
        $this->penulis = $penulis;
    }

    public function getPenerbit(): mixed
    {
        return $this->penerbit;
    }

    public function setPenerbit(mixed $penerbit): void
    {
        $this->penerbit = $penerbit;
    }

    /**
     * @return mixed
     */
    public function getDiskon()
    {
        return $this->diskon;
    }



    public function getLabel(){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setHarga($harga) {
        $this->harga = $harga;
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


$produk2->setDiskon(50);
echo "Harga : " . $produk2->getHarga();
echo "<hr>";
$produk1->setJudul("Naruto Shippuden");
echo $produk1->getJudul();

echo "<hr>";
$produk2->setPenulis("Lisvin");
echo $produk2->getPenulis();

