<?php

class database2{

    var $host = "localhost";
    var $uname = "root";
    var $pass =  "";
    var $db2 = "perpus";
    var $con;

    function __construct(){
        $this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db2);
        mysqli_select_db($this->con, $this->db2);
    }

    function tampilbuku(){
        $data2 = mysqli_query($this->con, "select * from buku");
        while($x = mysqli_fetch_array($data2)){
            $hasil[] = $x;
        }
        return $hasil;
    }

    function tambahbuku($judul, $penerbit, $tanggal){
        mysqli_query($this->con, "insert into buku values ('', '$judul', '$penerbit', '$tanggal')");
    }
    function editbuku($kode){
        $data = mysqli_query($this->con, "select * from buku where kode='$kode'");
        while($d = mysqli_fetch_array($data2)){
            $hasil[] = $x;
        }
        return $hasil;
    }
    function updatebuku($kode, $judul, $penerbit, $tanggal){
        mysqli_query($this->con, "update buku set judul='$judul',penerbit='$penerbit',tanggal='$tanggal' where kode='$kode'");
    }
}
?>