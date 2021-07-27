<?php 
include('template/top.php');
include('template/navigasi.php');
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
?>

<div id="main">
	<div class="content">
		<?php
		include('koneksi/conn.php');
		$idpnp=$_POST['no_identitas'];
		$nmpnp=$_POST['nama_konsumen'];
		$alamat=$_POST['almt_konsumen'];
		$nohp=$_POST['telepon'];
		$umurpnp=$_POST['umur'];
		$jekelamin=$_POST['jenis_kelamin'];
		$tlahir=$_POST['tmp_lahir'];
		$tgllahir=$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];


		
		
		$update = mysqli_query ($conn,"UPDATE  tbl_konsumen SET nama_konsumen='$nmpnp',almt_komsumen='$alamat',telepon='$nohp',umur='$umurpnp',jenis_kelamin='$jekelamin',tmp_lahir='$tlahir',tanggal='$tgllahir',foto='".$_FILES["foto"]["name"]."' where no_identitas='$idpnp' ") or die (mysqli_error());


		if($update){

  echo '<br/><br/>Data berhasil di Update! '; 
  echo '<a href="entry_konsumen.php" class="btn">Kembali</a>'; 
  
}else{

  echo 'Gagal menyimpan data! ';  
  echo '<a href="edit.php?idp='.$id.'" class="btn">Kembali</a>'; 
  
}


?>

</div>
</div>


<?php include('template/footer.php'); ?>

