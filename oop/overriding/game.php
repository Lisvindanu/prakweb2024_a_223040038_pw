<?php
namespace gameOveriding;
class game extends \InheritanceOverding\produk {

    public $waktuMain;

    public function __construct($judul , $penulis , $penerbit , $harga ,  $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduct() {
        $str = "Game : " . parent::getInfoProduct() . " - {$this->waktuMain} jam";
        return $str;
    }
}