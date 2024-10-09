<?php
//require_once __DIR__ . '/../Init.php';



class CetakInfoProduk {
    public $daftarProduct = array();

    public function tambahProduk(Produk $produk) {
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