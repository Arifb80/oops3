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
         echo "<p>Data Siswa</p>";
         echo "Nis      :".$this->nis=$nis."<br>";
         echo "Nama     :".$this->nama=$nama."<br>";
         echo "Jurusan  :".$this->jurusan=$jurusan."<br>";
         echo "Kelas    :".$this->kelas=$kelas."<br>";

         
         
       }
       public function indo($kehadiran1,$tugas1,$absen1,$ujian1){
         echo "<div>";
         echo "<u><b>indo</b></u><br>";
         echo "Nilai kehadiran      :".$kehadiran1."<br>";
         echo "Nilai tugas          :".$tugas1."<br>";
         echo "Nilai absen          :".$absen1."<br>";
         echo "Nilai ujian          :".$ujian1."<br>";
        $this->nilaiakhir1 = ($kehadiran1 + $tugas1 + $absen1 + $ujian1)/4;
        echo "Nilai akhir           :".$this->nilaiakhir1."<br>";
        echo "</div>";


       }

       public function inggris($kehadiran2,$tugas2,$absen2,$ujian2){
         echo "<div>";
         echo "<u><b>inggris</b></u><br>";
         echo "Nilai kehadiran      :".$kehadiran2."<br>";
         echo "Nilai tugas          :".$tugas2."<br>";
         echo "Nilai absen          :".$absen2."<br>";
         echo "Nilai ujian          :".$ujian2."<br>";
        $this->nilaiakhir2 = ($kehadiran2 + $tugas2 + $absen2 + $ujian2)/4;
        echo "Nilai akhir           :".$this->nilaiakhir2."<br>";
        echo "</div>";
   
       }

       public function mtk($kehadiran3,$tugas3,$absen3,$ujian3){
         echo "<div>";
         echo "<u><b>mtk</b></u><br>";
         echo "Nilai kehadiran      :".$kehadiran3."<br>";
         echo "Nilai tugas          :".$tugas3."<br>";
         echo "Nilai absen          :".$absen3."<br>";
         echo "Nilai ujian          :".$ujian3."<br>";
        $this->nilaiakhir3 = ($kehadiran3 + $tugas3 + $absen3 + $ujian3)/4;
        echo "Nilai akhir           :".$this->nilaiakhir3."<br>";
        echo "</div>";

        
       }

       public function produktif($kehadiran4,$tugas4,$absen4,$ujian4){
         echo "<div>";
         echo "<u><b>produktif</b></u><br>";
         echo "Nilai kehadiran      :".$kehadiran4."<br>";
         echo "Nilai tugas          :".$tugas4."<br>";
         echo "Nilai absen          :".$absen4."<br>";
         echo "Nilai ujian          :".$ujian4."<br>";
        $this->nilaiakhir4 = ($kehadiran4 + $tugas4 + $absen4 + $ujian4)/4;
        echo "Nilai akhir           :".$this->nilaiakhir4."<br>";
        echo "</div>";

       }


    }

$cetak = new siswa;
echo "<div class='card p-5 w-50 mx-auto mt-2 border shadow-md'>";
echo "<center>";
echo "<h3>data nilai<h3>";

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