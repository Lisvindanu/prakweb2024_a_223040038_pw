<?php
namespace gameOveriding;
class game extends \setterGetter\produk {

    public $waktuMain;

    public function __construct($judul , $penulis , $penerbit , $harga ,  $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

//    public function getHarga() {
//        return $this->harga;
//    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getInfoProduct() {
        $str = "Game : " . parent::getInfoProduct() . " - {$this->waktuMain} jam";
        return $str;
    }
}