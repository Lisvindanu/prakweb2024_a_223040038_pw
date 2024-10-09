<?php
//require_once __DIR__ . '/../Init.php';



abstract class Produk {
    protected $judul,
        $penulis,
        $penerbit,
        $harga;

    protected $diskon;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }



    public function setJudul($judul) {
        if(!is_string($judul)) {
            throw new \Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis(): mixed
    {
        return $this->penulis;
    }

    public function setPenulis(mixed $penulis): void
    {
        $this->penulis = $penulis;
    }

    public function getPenerbit(): mixed
    {
        return $this->penerbit;
    }

    public function setPenerbit(mixed $penerbit): void
    {
        $this->penerbit = $penerbit;
    }

    /**
     * @return mixed
     */
    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getLabel(){
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    abstract public function getInfo();

}


