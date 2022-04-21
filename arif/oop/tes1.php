<?php

class bangundatar{
    public $sisi;
    
}

class persegi extends bangundatar{
    public function luas($sisi){
    echo "<h4>menghitung luas persegi</h4>";
    echo "sisi : ".$sisi."<br>";

    $luaspersegi=($sisi * $sisi);

    echo "luas persegi : ".$luaspersegi;
    }

    public function keliling($sisi){
    echo "<h4>menghitung keliling persegi</h4>";
    echo "sisi : ".$sisi."<br>";

    $keliling=($sisi * 4);

    echo "luas persegi : ".$keliling;
    }
}
class segitiga extends bangundatar{
    public function luas($alas,$tinggi){

    echo "<h4>menghitung luas segitiga</h4>";
    echo "alas : ".$alas."<br>";
    echo "tinggi : ".$tinggi."<br>";
    $luassegitiga = ($alas * $tinggi)/2;

    echo "luas segitiga : ".$luassegitiga;   

    }
    public function keliling($sisia,$sisib,$sisic){

    echo "<h4>menghitung keliling segitiga</h4>";
    echo "sisi a : ".$sisia."<br>";
    echo "sisi b : ".$sisib."<br>";
    echo "sisi c : ".$sisic."<br>";
    $keliling = ($sisia + $sisib + $sisic);

    echo "keliling segitiga : ".$keliling;   

    }
}
class lingkaran extends bangundatar{
    public function luas($phi,$jari){

    echo "<h4>menghitung luas lingkaran</h4>";
    echo "phi : ".$phi."<br>";
    echo "jari-jari : ".$jari."<br>";
    $luaslingkaran = $phi * $jari;

    echo "luas lingkaran : ".$luaslingkaran;
    
    }
    public function keliling($phi,$jari){

    echo "<h4>menghitung keliling lingkaran</h4>";
    echo "2"."<br>";
    echo "phi : ".$phi."<br>";
    echo "jari-jari : ".$jari."<br>";
    $keliling = 2 * $phi * $jari;

    echo "luas lingkaran : ".$keliling;
    
    }
}
class trapesium extends bangundatar{
    public function luas($a,$b,$t){
    echo "<h4>menghitung luas trapesium</h4>";
    echo "sisi a ".$a."<br>";
    echo "sisi b ".$b."<br>";
    echo "tinggi  ".$t."<br>";
    $luas = ($a + $b * $t)/2;
    echo "luas trapesium : ".$luas;
    }
    public function keliling($a,$b,$c,$d){
    echo "<h4>menghitung keliling trapesium</h4>";
    echo "sisi a ".$a."<br>";
    echo "sisi b ".$b."<br>";
    echo "sisi c ".$c."<br>";
    echo "sisi d ".$d."<br>";
    $keliling = ($a + $b + $c +$d);
    echo "keliling trapesium : ".$keliling;
    }
}



$cetak = new persegi();
echo $cetak->luas(2);
echo $cetak->keliling(4);
echo "<br>";
echo "<hr>";
$cetak = new segitiga();
echo $cetak->luas(2,4);
echo $cetak->keliling(4,3,5);
echo "<br>";
echo "<hr>";
$cetak = new lingkaran();
echo $cetak->luas(3.14,7);
echo $cetak->keliling(3.14,7);
echo "<br>";
echo "<hr>";
$cetak = new trapesium();
echo $cetak->luas(3,6,8);
echo $cetak->keliling(3,7,4,5);
?>