<?php

class kucing{
    public $jenis;
    public $warna="oren";
    public $makan="wiskas";
    
    public function makan(){
        echo "kucing makan ikan ".$this->makan;

    }
    public function minum(){
        echo "kucing minum air";
    }


}

    $cetak = new kucing();
   
    echo $cetak->makan();
    echo "<br>";
    echo $cetak->minum();
    

    
    echo "<br>";
    echo $cetak->jenis = "Anggora";
    echo "<br>";
    echo $cetak->warna;


?>