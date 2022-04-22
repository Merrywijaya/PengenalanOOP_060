<!--
// Nama     : Merry Margaretha Wijaya Tamba 
// NIM      : 13321060 
// Prodi    : D3 Teknologi Komputer 
-->
<?php
require_once 'App/init.php';
/*
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100,);
$produk2 = new Game("Uncharted","Neil Druckmann", "Sony Computer", 250000, 50,);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
*/

//echo $cetakProduk->cetak();
//alias

use App\service\User as ServiceUser;
use App\Produk\User;
//instans
new User();
echo "<br>";
new app\Produk\User();