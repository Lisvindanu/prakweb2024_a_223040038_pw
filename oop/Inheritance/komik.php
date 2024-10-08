<?php

class komik extends \Inheritance1\produk {
    public function getInfoProduk() {
        $str = "komik : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}