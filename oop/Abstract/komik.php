<?php
namespace abstract;


class komik extends produk {
    public $jmlHalaman;

    public function __construct($judul , $penulis, $penerbit , $harga ,  $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduct() {
        $str = " komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }



}
