<?php
namespace cetakInfoProdukObjectType;
class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})  ";
        return $str;
}

}
