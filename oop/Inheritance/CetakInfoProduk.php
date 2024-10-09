<?php
namespace Inheritance1;
use cetakInfoProdukObjectType\Produk;

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})  ";
        return $str;
}

}
