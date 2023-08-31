<?php

$conn = mysqli_connect('localhost','root','','pengaduan_masyarakat');
if(!$conn){
    echo 'KONEKSI GAGAL';
}

class masyarakat{
    public $nik;
    public $nama;
    public $username;
    public $password;
    public $telp;

    function __construct($nik,$nama,$username,$password,$telp)
    {
        $this->nik = $nik;
        $this->nama = $nama;
        $this->username = $username;
        $this->password = $password;
        $this->telp = $telp;
    }

    function menambahkan(){
        global $conn;
        $conn->query("INSERT INTO masyarakat VALUES('$this->nik','$this->nama','$this->username','$this->password','$this->telp')");
    }

    function menghapus(){
        global $conn;
        $conn->query("DELETE FROM masyarakat WHERE nik='$this->nik'");
    }

    function memperbarui($nama, $username, $password, $telp){
        global $conn;
        $conn->query("UPDATE `masyarakat` SET `nik`='$this->nik',`nama`='$this->nama',`username`='$this->username',`password`='$this->password',`telp`='$this->telp' WHERE nik=$this->nik");
    }

}

$masyarakat1 = new masyarakat('1000','siti','sitiup','543','008123242');
$masyarakat1->menambahkan();
?>