<!--
// Nama     : Merry Margaretha Wijaya Tamba 
// NIM      : 13321060 
// Prodi    : D3 Teknologi Komputer 
-->
<?php
class Game extends Produk implements InfoProduk {
    public $jmlHalamanwaktuMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit",  $harga="harga=0", 
    $waktuMain = 0 ){
        parent::__construct($judul, $penulis, $penerbit,$harga, );
        $this->waktuMain=$waktuMain;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    public function getInfoProduk(){
        $str = "Game : ".$this->getInfo()." -{$this->waktuMain} Jam.";
        return $str;
    }
}