<?php
// buat class induk: komputer
class komputer {
  
   public $merk;
   public $processor;
   public $memory;
  
   public function beli_komputer() {
     return "Beli komputer baru";
   }
}
  
// turunkan class komputer ke laptop
class laptop extends komputer {
  
   public function lihat_spec($merk,$processor,$memory) {
     echo "merk:" .$this->merk;
     echo "processor:" .$this->processor; 
     echo "memory:" .$this->memory;
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();
  

  
//panggil method objek
echo $laptop_baru->beli_komputer();
echo "<br />";
echo $laptop_baru->lihat_spec("acer","ryzen","3gb");
?>