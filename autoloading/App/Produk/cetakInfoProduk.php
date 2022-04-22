<!--
// Nama     : Merry Margaretha Wijaya Tamba 
// NIM      : 13321060 
// Prodi    : D3 Teknologi Komputer 
-->
<?php
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