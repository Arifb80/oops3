<?php

class bangundatar{

    public $luaspersegi;

    public function persegi($sisi){

    echo "<h1>menhitung luas persegi</h1>";
    echo "sisi : ".$sisi."<br>";

    $luaspersegi = $sisi * $sisi;

    echo "luas persegi : ".$luaspersegi;

    }
    public $segitiga;

    public function segitiga($alas,$tinggi){

    echo "<h1>menhitung luas segitiga</h1>";
    echo "alas : ".$alas."<br>";
    echo "tinggi : ".$tinggi."<br>";
    $luassegitiga = ($alas * $tinggi)/2;

    echo "luas segitiga : ".$luassegitiga;

    }

    public $lingkaran;

    public function lingkaran($phi,$jari){

    echo "<h1>menghitung luas lingkaran</h1>";
    echo "phi : ".$phi."<br>";
    echo "jari-jari : ".$jari."<br>";
    $luaslingkaran = $phi * $jari;

    echo "luas lingkaran : ".$luaslingkaran;

    }





}

$cetak = new bangundatar();

echo $cetak->persegi(5);
echo "<br>";
echo "<hr>";

echo $cetak->segitiga(2,3);
echo "<br>";
echo "<hr>";

echo $cetak->lingkaran(3.14,22);
echo "<br>";
echo "<hr>";


?>