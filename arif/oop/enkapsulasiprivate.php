<?php

//class manusia
class manusia{
    //menentukan property dengan private
    private $nama = "malas ngoding";    
    
    //method public
    public function tampilkan_nama(){
        return "Nama saya " .$this->nama;
    }
    
    
}
//instansiasi class manusia
$manusia = new manusia();

//memanggil method public tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
?>