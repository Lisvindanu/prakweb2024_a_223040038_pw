<?php
namespace visibility;

class komik extends \visibility\produk {
    public $jmlHalaman;

    public function __construct($judul , $penulis, $penerbit , $harga ,  $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduct() {
        $str = " komik : " . parent::getInfoProduct() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }



}
