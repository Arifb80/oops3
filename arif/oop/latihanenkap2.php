<?php



class hitung{
    private $gaji_pokok;
    private $tunjangan_pendidikan;
    private $total_pinjaman;
    private $total_gaji;

    private function Gaji_Pokok($nama, $jabatan){
        echo "<h3>Gaji Pokok</h3>";
        echo "Nama Karyawan : ". $nama. "<br>";

        if($jabatan == "direktur"){
           $this->gaji_pokok = 5000000;
           
       }
       else if($jabatan == "manajer"){
           $this->gaji_pokok = 3000000;
           
       }
       else if($jabatan == "karyawan"){
           $this->gaji_pokok = 2000000;
           
       }
       else if($jabatan == "ob"){
           $this->gaji_pokok = 1000000;
           
       }
          echo "jabatan : ". $jabatan. "<br>";
           echo "Gaji Pokok:".$this->gaji_pokok. "<br>";
           echo "<hr>";
       }

       private function Tunjangan($pendidikan){
        if($pendidikan == "S1"){
           $this->tunjangan_pendidikan = 1000000;
           
       }
       else if($pendidikan == "D3"){
           $this->tunjangan_pendidikan = 5000000;
           
       }
       else if($pendidikan == "smk"){
           $this->tunjangan_pendidikan = 500000;
           
       }
       else if($pendidikan == "smp"){
           $this->tunjangan_pendidikan = 250000;
           
       }
          echo "pendidikan : ". $pendidikan. "<br>";
           echo "Tunjangan pendidikan:".$this->tunjangan_pendidikan. "<br>";
           echo "<hr>";
       }

       protected function Potongan($tabungan,$pinjaman){
           echo "tabungan : ". $tabungan. "<br>";
           echo "pinjaman : ". $pinjaman. "<br>";
           $this->total_pinjaman = $tabungan + $pinjaman;
           echo "total pinjaman : ".$this->total_pinjaman."<br>";
           echo "<hr>";
       }

       public function total_gaji()
       {
       echo $this->Gaji_Pokok("arif","manajer");
       echo $this->Tunjangan("smk");
       echo $this->Potongan(50000,30000);

       $this->total_gaji = ($this->gaji_pokok + $this->tunjangan_pendidikan);
       echo "total gaji :" .$this->total_gaji;
       echo "<hr>";
       }
     



}
  $cetak = new hitung();
  echo"<br>";
  echo $cetak->total_gaji();
  
  echo"<br>";
    
    














?>