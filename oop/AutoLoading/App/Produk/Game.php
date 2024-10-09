<?php
//require_once __DIR__ . '/../Init.php';




class game extends Produk implements InfoProduk {

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
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} jam";
        return $str;
    }

    public function getInfo(){
        $str = " {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }
}