<?php
    class Warung_Makanan
    {
        private $hargaMakanan;
        private $rating;
         
        #mendefinisikan method setter dan getter
        #untuk kodeKaryawan
        function setHargaMakanan($hargaMakanan) {
            $this->hargaMakanan = $hargaMakanan;
        }
         
        function getHargaMakanan() {
            return $this->hargaMakanan;
        }
         
        #mendefinisikan method setter dan getter
        #untuk jabatan
        function setRating($rating) {
            $this->rating = $rating;
        }
         
        function getRating() {
            return $this->rating;
        }
    }
     
    #buat objek baru Perusahaan_Makanan
    $harga1 = new Warung_Makanan();
     
    #set properti kodeKaryawan untuk objek $karyawan1
    $harga1->setHargaMakanan("limaribu");
     
    #set properti jabatan untuk objek $karyawan1
    $harga1->setRating("lima");
     
    #lakukan clone objek $karyawan1 dengan $karyawan2
    $harga2 = clone $harga1;
     
    #set properti kodeKaryawan untuk objek $karyawan2
    $harga2->setHargaMakanan("sepuluhribu");
     
    #keluaran properti dari objek $makanan dan $makanan2
     
    echo "harga makanan : " , $harga1->getHargaMakanan();
    echo "<br>rating makanan : ", $harga1->getRating();
     
    echo "<br>harga makanan : " , $harga2->getHargaMakanan();
    echo "<br>rating makanan : ", $harga2->getRating();
?>