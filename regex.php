<?php
$string = "saya sedang belajar #ngoding";
$regex = "/#([a-zA-Z0-9]_)+/";
$ganti= "<b>$0</b>";
echo "kalimat pertama : ". $string."</br>";
echo "Kalimat diubah : ".preg_replace($regex, $ganti, $string); 
?>