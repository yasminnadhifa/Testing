<?php
class database{
	var $host="localhost";
	var $uname="root";
	var $pass="";
	var $db="yasminTIC";
	var $con;

	
	function __construct(){
		$this->con=mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		mysqli_select_db($this->con,$this->db);
	}
	function tampil_data(){
		$data=mysqli_query($this->con,"select * from pesawat");
		while($d=mysqli_fetch_array($data)){
			$hasil[]= $d;
		}
		return $hasil;
	}
	function input($nama,$usia,$jenis,$gender,$tujuan,$tanggal){
		mysqli_query(mysqli_connect($this->host,$this->uname,$this->pass,$this->db), "insert into pesawat
		values('','$nama','$usia','$jenis', '$gender','$tujuan','$tanggal')");
	}
	function hapus($id){
		mysqli_query($this->con,"delete from pesawat where id='$id'");
	}
    function edit($id){
        $data = mysqli_query($this->con,"select * from pesawat where id='$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
	function update($id,$nama,$usia,$jenis,$gender,$tujuan,$tanggal){
        $stmt = mysqli_query($this->con,"update pesawat set nama='$nama', usia='$usia', jenis='$jenis', gender='$gender', tujuan='$tujuan',tanggal='$tanggal' where id='$id'");
    }
}
?>