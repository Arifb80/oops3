<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body style="margin: 4rem;">

<center>

<h2> <br></h2>
</center>
<br>

    <div class="card">

        <!-- HEADER CARD -->
        <div class="card-header">
            <h5>siswa</h5>
        </div>

        <!-- BODY CARD -->
        <div class="card-body">

            <div class="row g-2">
                <div class="col text-center">
                    <h4>
                    <b><i></i></b>
                    <h4>
                </div>

                <div class="col text-center">
                    <h4>
                    <b><i></i></b>
                    <h4>
                </div>
            </div>

            <form action="" method="post">

            <!-- CARD FORM -->

            <div class="row g-2 mb-3">
                <div class="col ">
                    <label>Nis</label>
                    <input type="number" name="nis" placeholder="nis" class="form-control" required>
                </div>

                <div class="row g-2 mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="nama" class="form-control" required>
                </div>
            </div>

            <div class="row g-2 mb-3">
                <div class="col ">
                    <label>Jurusan</label>
                    <select name="jurusan" id="" class="form-select" required>
                        <option>jurusan</option>
                        <option value="rekayasaperangkatlunak">rekayasaperangkatlunak</option>
                        <option value="tsm">tsm</option>
                        <option value="tkr">tkr</option>
                    </select>
                </div>

                <div class="row g-2 mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas" placeholder="kelas" class="form-control" required>
                </div>
            </div>
            
            <div div class="d-flex justify-content-center">
                    <div class="col">   
                        <p>bahasa indonesia</p>
                        <input type="number" name="kehadiran1" class="form-control" placeholder="Kehadiran">
                        <input type="number" name="tugas1" class="form-control" placeholder="Tugas">
                        <input type="number" name="absen1" class="form-control" placeholder="Absen">
                        <input type="number" name="ujian1" class="form-control" placeholder="Ujian">
                    </div>
                    <div class="col">
                        <p>Bahasa Inggris</p>
                        <input type="number" name="kehadiran2" class="form-control" placeholder="Kehadiran">
                        <input type="number" name="tugas2" class="form-control" placeholder="Tugas">
                        <input type="number" name="absen2" class="form-control" placeholder="Absen">
                        <input type="number" name="ujian2" class="form-control" placeholder="Ujian">
                    </div>
                    <div class="col">
                        <p>Matematika</p>
                        <input type="number" name="kehadiran3" class="form-control" placeholder="Kehadiran">
                        <input type="number" name="tugas3" class="form-control" placeholder="Tugas">
                        <input type="number" name="absen3" class="form-control" placeholder="Absen">
                        <input type="number" name="ujian3" class="form-control" placeholder="Ujian">
                    </div>
                    <div class="col">
                        <p>Produktif</p>
                        <input type="number" name="kehadiran4" class="form-control" placeholder="Kehadiran">
                        <input type="number" name="tugas4" class="form-control" placeholder="Tugas">
                        <input type="number" name="absen4" class="form-control" placeholder="Absen">
                        <input type="number" name="ujian4" class="form-control" placeholder="Ujian">
                    </div>
                </div>
                <div>
               <div class="row g-2">
                <div class="col text-center">
                   <input type="submit" name="kirim" value="kirim" class="btn-primary mt-4" required>
                </div>

            </div>
            </form>
        </div>

    </div>

<?php

if (isset($_POST['kirim'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];

    $kehadiran1 = $_POST['kehadiran1'];
    $tugas1 = $_POST['tugas1'];
    $absen1 = $_POST['absen1'];
    $ujian1 = $_POST['ujian1'];

    $kehadiran2 = $_POST['kehadiran2'];
    $tugas2 = $_POST['tugas2'];
    $absen2 = $_POST['absen2'];
    $ujian2 = $_POST['ujian2'];

    $kehadiran3 = $_POST['kehadiran3'];
    $tugas3 = $_POST['tugas3'];
    $absen3 = $_POST['absen3'];
    $ujian3 = $_POST['ujian3'];

    $kehadiran4 = $_POST['kehadiran4'];
    $tugas4 = $_POST['tugas4'];
    $absen4 = $_POST['absen4'];
    $ujian4 = $_POST['ujian4'];

    class siswa{
       public $nis;
       public $nama;
       public $jurusan;
       public $kelas;
       public $nilaiakhir1;
       public $nilaiakhir2;
       public $nilaiakhir3;
       public $nilaiakhir4;

       public function datasiswa($nis,$nama,$jurusan,$kelas){
         echo "<b>Data Siswa</b><br>";
         echo "Nis      :".$this->nis=$nis."<br>";
         echo "Nama     :".$this->nama=$nama."<br>";
         echo "Jurusan  :".$this->jurusan=$jurusan."<br>";
         echo "Kelas    :".$this->kelas=$kelas."<br>";

         
         
       }
       public function indo($kehadiran1,$tugas1,$absen1,$ujian1){
         echo "<div>";
         echo "<u><b>indo</b></u><br>";
         echo " kehadiran      :".$kehadiran1."<br>";
         echo " tugas          :".$tugas1."<br>";
         echo " absen          :".$absen1."<br>";
         echo " ujian          :".$ujian1."<br>";
        $this->nilaiakhir1 = ($kehadiran1 + $tugas1 + $absen1 + $ujian1)/4;
        echo "Nilai akhir           :".$this->nilaiakhir1."<br>";
        echo "</div>";


       }

       public function inggris($kehadiran2,$tugas2,$absen2,$ujian2){
         echo "<div>";
         echo "<u><b>inggris</b></u><br>";
         echo " kehadiran      :".$kehadiran2."<br>";
         echo " tugas          :".$tugas2."<br>";
         echo " absen          :".$absen2."<br>";
         echo " ujian          :".$ujian2."<br>";
        $this->nilaiakhir2 = ($kehadiran2 + $tugas2 + $absen2 + $ujian2)/4;
        echo "Nilai akhir           :".$this->nilaiakhir2."<br>";
        echo "</div>";
   
       }

       public function mtk($kehadiran3,$tugas3,$absen3,$ujian3){
         echo "<div>";
         echo "<u><b>mtk</b></u><br>";
         echo " kehadiran      :".$kehadiran3."<br>";
         echo " tugas          :".$tugas3."<br>";
         echo " absen          :".$absen3."<br>";
         echo " ujian          :".$ujian3."<br>";
        $this->nilaiakhir3 = ($kehadiran3 + $tugas3 + $absen3 + $ujian3)/4;
        echo "Nilai akhir           :".$this->nilaiakhir3."<br>";
        echo "</div>";

        
       }

       public function produktif($kehadiran4,$tugas4,$absen4,$ujian4){
         echo "<div>";
         echo "<u><b>produktif</b></u><br>";
         echo " kehadiran      :".$kehadiran4."<br>";
         echo " tugas          :".$tugas4."<br>";
         echo " absen          :".$absen4."<br>";
         echo " ujian          :".$ujian4."<br>";
        $this->nilaiakhir4 = ($kehadiran4 + $tugas4 + $absen4 + $ujian4)/4;
        echo "Nilai akhir           :".$this->nilaiakhir4."<br>";
        echo "</div>";

       }


    }

$cetak = new siswa;
echo "<div class='card p-5 w-75 mx-auto mt-2 border shadow-md'>";
echo "<center>";

echo $cetak->datasiswa($nis,$nama,$jurusan,$kelas);
echo "</center>";
echo "<div class='d-flex justify-content-between w-100 mt-3'>";
echo $cetak->indo($kehadiran1,$tugas1,$absen1,$ujian1);
echo $cetak->inggris($kehadiran2,$tugas2,$absen2,$ujian2);
echo $cetak->mtk($kehadiran3,$tugas3,$absen3,$ujian3);
echo $cetak->produktif($kehadiran4,$tugas4,$absen4,$ujian4);
echo "</div>";
echo "</div>";
}



?>















































