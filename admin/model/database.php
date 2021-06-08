<?php

class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass =  "";
    var $db = "perpus";
    var $con;

    function __construct(){
        $this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db($this->con, $this->db);
    }

    function tampil(){
        $data = mysqli_query($this->con, "select * from mhs");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah($nama, $email, $prodi){
        mysqli_query($this->con, "insert into mhs values ('', '$nama', '$email', '$prodi')");
    }

    function delete($nim){
        mysqli_query($this->con, "delete from mhs where nim='$nim'");
    }

    function edit($nim){
        $data = mysqli_query($this->con, "select * from mhs where nim='$nim'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($nim, $nama, $email, $prodi){
        mysqli_query($this->con, "update mhs set nama='$nama',email='$email',prodi='$prodi' where nim='$nim'");
    }
}
?>
