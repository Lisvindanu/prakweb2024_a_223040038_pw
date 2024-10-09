<?php
namespace Interfacess;

require_once 'InfoProduk.php';
class komik extends produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul , $penulis, $penerbit , $harga ,  $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduct() {
        $str = " komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }

    public function getInfo(){
        $str = " {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }



}
