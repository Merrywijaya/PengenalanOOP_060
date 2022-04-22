<!--
// Nama     : Merry Margaretha Wijaya Tamba 
// NIM      : 13321060 
// Prodi    : D3 Teknologi Komputer 
-->

<?php
abstract class Buah {
    private $warna;

    abstract public function makan();
        //kunyah
        //nyam.nyam.nyam
    
    public function setWarna($warna){
        $this->warna=$warna;
    }
}

class Apel extends Buah{
    public function makan(){
        //kunyah
        //sampai bagian tengah
    }
}

class jeruk extends Buah {
    public function makan(){
        //kupas
        //kunyah
    }
}

$apel = new Apel();
$apel->makan();

$buah = new Buah();
$buah->makan();

