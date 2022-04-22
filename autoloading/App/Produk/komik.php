<!--
// Nama     : Merry Margaretha Wijaya Tamba 
// NIM      : 13321060 
// Prodi    : D3 Teknologi Komputer 
-->
<?php
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __contstruct($judul="judul", $penulis="penulis", $penerbit="penerbit",  $harga="harga=0", 
    $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit,$harga );
        $this->jmlHalaman=$jmlHalaman;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    public function getInfoProduk(){
        $str = "komik :" .$this->getInfo()."-{$this->jmlHalaman} Halaman.";
    return $str;
    }
}