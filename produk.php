<?php

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0; 

    //public function sayHello() {
        //return "Hello World!";

    //}
//}

public function getLabel() {
    return "$this->penulis, $this->penerbit";

}
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi";
$produk3->penerbit = "Shonen";
$produk3->harga = "30000";
$produk3->judul = "Naruto";

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();