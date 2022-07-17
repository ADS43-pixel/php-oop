<?php

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;
           $tipe;

    //public function sayHello() {
        //return "Hello World!";

    //}
//}

public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
}
public function getLabel() {
    return "$this->penulis, $this->penerbit";

    }
}

public function getInfoLengkap() {

    $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {this->harga})";
    if( $this->tipe == "Komik" ) {
        $str .= " - {$this->jmlHalaman} Halaman.";
    } else if( $this-> tipe == "Game" ) {
        $str .= " ~ {$this->waktuMain} Jam.";
    }
    } 


class CetakInfoProduk {
    public function cetak( $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);