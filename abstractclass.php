<!--
// Nama     : Merry Margaretha Wijaya Tamba 
// NIM      : 13321060 
// Prodi    : D3 Teknologi Komputer 
-->
<?php

abstract class Produk{
    private $judul, 
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
    public function getHarga(){
        return $this->harga-($this->harga * $this->diskon/100);
    }
    abstract public function getInfoProduk();
    
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}
class Komik extends Produk {
    public $jmlHalaman;

    public function __contstruct($judul="judul", $penulis="penulis", $penerbit="penerbit",  $harga="harga=0", 
    $jmlHalaman = 0){
    
        parent::__construct($judul, $penulis, $penerbit,$harga );
        $this->jmlHalaman=$jmlHalaman;
    }
    public function getInfoProduk(){
        $str = "komik :" .$this->getInfo()."-{$this->jmlHalaman} Halaman.";
    return $str;
    }
}
class Game extends Produk {
    public $jmlHalamanwaktuMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit",  $harga="harga=0", 
    $waktuMain = 0 ){
        parent::__construct($judul, $penulis, $penerbit,$harga, );
        $this->waktuMain=$waktuMain;
    }
    public function getInfoProduk(){
        $str = "Game : ".$this->getInfo()." -{$this->waktuMain} Jam.";
        return $str;
    }
}
class CetakInfoProduk {
    public $daftarProduk= array();

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[]=$produk;
    }

    public function cetak(){
        $str="DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
            $str .="-{$p->getInfoProduk()}<br>";
        }
        return $str;
    }
}
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100,);
$produk2 = new Game("Uncharted","Neil Druckmann", "Sony Computer", 250000, 50,);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
