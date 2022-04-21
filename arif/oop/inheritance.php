<?php

class kendaraan{
    protected $jenis="matic";
    protected $warna="hijau";
}

class motor extends kendaraan{
    public function jenis(){
        echo "ini motor ".$this->jenis."<br>";
        echo "warna motor ".$this->warna;
    }
}
$cetak = new motor();

echo $cetak->jenis();

?>