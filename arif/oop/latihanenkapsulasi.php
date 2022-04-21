<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
     <tr>
         <td>Nama karyawan</td>
         <td>:</td>
         <td><input type"text" name"nama"></td>
     </tr>
     <tr>
         <td>Jabatan</td>
         <td>:</td>
         <td><input type"text" name"jabatan"></td>
     </tr>
     <tr>
         <td>Pendidikan</td>
         <td>:</td>
         <td><input type"text" name"pendidikan"></td>
     </tr>
    <tr>
         <td>Tabungan</td>
         <td>:</td>
         <td><input type"number" name"tabungan"></td>
     </tr>
     <tr>
         <td>potongan</td>
         <td>:</td>
         <td><input type"number" name"potongan"></td>
     </tr>
        <button type="button" class="btn btn-outline-primary" name"kirim">KIRIM</button>
    </form>
</body>
</html>
<?php

if (isset($_POST['kirim'])){
    public $nama = $_POST['nama'];
    public $jabatan = $_POST['jabatan'];
    public $pendidikan = $_POST['pendidikan'];
    public $tabungan = $_POST['tabungan'];
    public $potongan = $_POST['potongan'];

public function hitung(){
       if($jabatan = "direktur"){
           $gajipokok = 5000000;
           echo "Gaji Pokok:".$gajipokok;
       }
       if($jabatan = "manajer"){
           $gajipokok = 3000000;
           echo "Gaji Pokok:".$gajipokok;
       }
       if($jabatan = "karyawan"){
           $gajipokok = 2000000;
           echo "Gaji Pokok:".$gajipokok;
       }
       if($jabatan = "ob"){
           $gajipokok = 1000000;
           echo "Gaji Pokok:".$gajipokok;
       }
       if($pendidikan = "s1"){
           $tunjangan = 1000000;
           echo "Gaji Pokok:".$gajipokok;
       
 

}













}

?>