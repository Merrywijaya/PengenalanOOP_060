<!--
// Nama     : Merry Margaretha Wijaya Tamba 
// NIM      : 13321060 
// Prodi    : D3 Teknologi Komputer 
-->
<?php

abstract class Produk{
    protected $judul, 
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;
        
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit",  $harga="harga=0" ){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }
    public function setJudul($judul){
        $this->judul=$judul;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setPenulis($penulis){
        $this->penulis=$penulis;
    }
    public function getPenulis(){
        return$this->penulis;
    }
    public function setPenerbit(){
        $this->penerbit=$penerbit;
    }
    public function getPenerbit(){
        return$this->penerbit;
    }
    public function setDiskon($diskon){
        $this->diskon=$diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
    public function setHarga(){
        $harga->harga=$harga;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    abstract public function getInfo();

    public function getHarga(){
        return $this->harga-($this->harga * $this->diskon/100);
    } 
}