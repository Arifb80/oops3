<?php

if (isset($_POST['kirim'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];

    class siswa{
       public $nis;
       public $nama;
       public $jurusan;
       public $kelas;

       public function datasiswa($nis,$nama,$jurusan,$kelas){
         
        <div class="card-body">
            <table cellpadding="5px" class="table table-hover">
                <tr>
                    <td>nis</td>
                    <td>:</td>
                    <td><?php echo $nis?></td>
                </tr>

                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td><?php echo $nama ?></td>
                </tr>

                <tr>
                    <td>jurusan</td>
                    <td>:</td>
                    <td><?php echo "Rp.".$jurusan?></td>
                </tr>

                <tr>
                    <td>kelas</td>
                    <td>:</td>
                    <td><?php echo $kelas?></td>
                </tr>

                
            </table>
        </div>

    </div>
       }



    }

$cetak = new siswa;
echo $cetak->datasiswa($nis,$nama,$jurusan,$kelas);


}



?>
