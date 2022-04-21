<?php

class manusia{

    public $warna;
    public $jeniskelamin;

    public function __construct(){
        echo "ini method construct";
    }
    public function perkenalan(){
        echo "Nama saya Arif";
    }
    public function __destruct(){
        echo "ini method destruct";
    }

}
$cetak = new manusia();

echo "<br>";
echo $cetak->perkenalan();
echo "<br>";



?>