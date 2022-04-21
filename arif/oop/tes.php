<?php
class rapot{
     // Buat Property
    public $mtk;
    public $indo;
    public $total;
    public $ratarata;

    public function biodata($nama,$kelas,$jurusan){
        echo "<h3>biodata</h3>";
        echo "nama    : ".$nama."<br>";
        echo "kelas   : ".$kelas."<br>";
        echo "jurusan : ".$jurusan."<br>";
    }

    public function nilai($kehadiran,$absen,$uts,$uas){
        echo "<h3>nilai mtk</h3>";
        echo "nilai kehadiran: ".$kehadiran."<br>";
        echo "nilai absen    : ".$absen."<br>";
        echo "nilai uts      : ".$uts."<br>";
        echo "nilai uas      : ".$uas."<br>";
        $this->mtk = ($kehadiran + $absen + $uts + $uas)/4;
        echo "nilai rapot    : ".$this->mtk;

    }
    public function nilai2($kehadiran,$absen,$uts,$uas){
        echo "<h3>nilai indo</h3>";
        echo "nilai kehadiran: ".$kehadiran."<br>";
        echo "nilai absen    : ".$absen."<br>";
        echo "nilai uts      : ".$uts."<br>";
        echo "nilai uas      : ".$uas."<br>";
        $this->indo = ($kehadiran + $absen + $uts + $uas)/4;
        echo "nilai rapot    : ".$this->indo;

    }
    public function nilai3($kehadiran,$absen,$uts,$uas){
        echo "<h3>nilai ips</h3>";
        echo "nilai kehadiran: ".$kehadiran."<br>";
        echo "nilai absen    : ".$absen."<br>";
        echo "nilai uts      : ".$uts."<br>";
        echo "nilai uas      : ".$uas."<br>";
        $this->ips = ($kehadiran + $absen + $uts + $uas)/4;
        echo "nilai rapot    : ".$this->ips;

    }
    public function nilai4($kehadiran,$absen,$uts,$uas){
        echo "<h3>nilai ipa</h3>";
        echo "nilai kehadiran: ".$kehadiran."<br>";
        echo "nilai absen    : ".$absen."<br>";
        echo "nilai uts      : ".$uts."<br>";
        echo "nilai uas      : ".$uas."<br>";
        $this->ipa = ($kehadiran + $absen + $uts + $uas)/4;
        echo "nilai rapot    : ".$this->ipa;

    }
    public function total(){
        $this->total=($this->mtk + $this->indo + $this->ips + $this->ipa);
        echo "total :".$this->total;
        echo "<br>";
        $this->ratarata=($this->mtk + $this->indo + $this->ips + $this->ipa)/4;
        echo "ratarata :".$this->ratarata;
    }
          

}
$cetak = new rapot();

echo $cetak->biodata("haddad","XI RPL 1","RPL");
echo "<br>";
echo "<hr>";
echo $cetak->nilai(80,80,80,90);
echo "<br>";
echo "<hr>";
echo $cetak->nilai2(80,80,80,90);
echo "<br>";
echo "<hr>";
echo $cetak->nilai3(80,80,80,90);
echo "<br>";
echo "<hr>";
echo $cetak->nilai4(80,80,80,90);
echo "<br>";
echo "<hr>";


echo $cetak->total();


?>