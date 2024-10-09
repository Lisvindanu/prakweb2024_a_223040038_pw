<?php
namespace Inheritance1;
class game extends \Inheritance1\produk {
    public function getInfoProduct() {
        $str = "Game : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}) - {$this->waktuMain} Jam";
        return $str;
    }
}