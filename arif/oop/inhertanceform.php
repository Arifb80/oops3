<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
      <table>
      <tr>
          <td>panjang</td>
          <td></td>
          <td><input type"number" name="panjang"></td>
      </tr>
      <tr>
          <td>lebar</td>
          <td></td>
          <td><input type"number" name="lebar"></td>
      </tr>
      <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="kirim"></td>
            </tr>
    </table>
    </form>
</body>
</html>


<?php
if(isset($_POST['kirim'])){
   $panjang = $_POST['panjang'];
   $lebar = $_POST['lebar'];

class bangundatar{
    public $luas;
    public $keliling;
}

class persegipanjang extends bangundatar{
     public function luasdankeliling($panjang,$lebar){
     echo "panjang :".$panjang."<br>";
     echo "lebar   :".$lebar."<br>";

     $this->luas = $panjang * $lebar;
     $this->keliling = 2 * $panjang * $lebar;

     echo "luas :".$this->luas."<br>";
     echo "keliling :".$this->keliling."<br>";
     }
  }
  
  $cetak = new persegipanjang();
  echo $cetak->luasdankeliling($panjang,$lebar);

}

  
?>