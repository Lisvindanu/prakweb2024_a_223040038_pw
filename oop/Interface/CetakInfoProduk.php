<?php
namespace Interfacess;

class CetakInfoProduk {
    public $daftarProduct = array();

    public function tambahProduk(produk $produk) {
        $this->daftarProduct[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduct as $p) {
            $str .= "- {$p->getInfoProduct()} <br>";
        }
        return $str;
    }
}
