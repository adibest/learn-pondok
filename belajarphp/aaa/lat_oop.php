<?php

//destruck construct
//www.malasngoding.com
//class manusia
class manusia{
    //property
    var $nama;
    var $warna;
    
    //method construct di jalankan pertama kali
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    
    //method destruct di jalankan terakhir
    function __destruct(){
        echo "ini adalah isi method destruct <br/>";
    }
    
    //method manusia
    function tampilkan_nama(){
        return "Nama saya malasngoding <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();

//protected
//class manusia
class manusia{
    //menentukan property dengan protected
    protected $nama = "malas ngoding";    
    
    //method protected
    protected function nama(){
        return "Nama saya " .$this->nama;
    }
    
    public function tampilkan_nama(){
        return $this->tampilkan_nama;
    }
    
}
 
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method public tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();

//inheritance
//www.malasngoding.com
// class parent
class manusia{
 
    // property class manusia
    public $nama_saya;  
 
    // method pada class manusia
    function berinama($saya){
        $this->nama_saya=$saya;
    }
    
}
 
// class turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia{
 
    // property class teman
    public $nama_teman;
 
    // method pada class teman
    function berinamateman($teman){
        $this->nama_teman=$teman;
    }
}
 
// instansiasi class teman
$malasngoding = new teman;
 
// method beri nama adalah method pada class manusia, tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia
$malasngoding->berinama(" MALAS NGODING ");
$malasngoding->berinamateman(" Diki ");
 
// menampilkan isi property
echo "Nama Saya :" . $malasngoding->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $malasngoding->nama_teman;
?>