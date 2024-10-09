<?php
require_once 'App/Init.php';
//$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100 );
//$produk2 = new Game("Uncharteed", "Neil Druckmann", "Shounen Jump", 250000, 50 );
//
//
//$cetakProduk = new CetakInfoProduk();
//$cetakProduk->tambahProduk($produk1);
//$cetakProduk->tambahProduk($produk2);
//echo  $cetakProduk->cetak();
//
//echo "<hr>";
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();