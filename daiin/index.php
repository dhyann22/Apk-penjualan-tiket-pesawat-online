<?php 
session_start();
if(isset($_SESSION["username"])){
}else{
	echo header("location:login.php");
	
}
include('template/top.php');
include('template/navigasi.php');

?>

<div id="main">
	<div class="content">
		<div id="profile">
			

		</div>
		<hr/>

		<p1 style="text-cente text-size:5px;">copyright @dyan</p1>
		<br />
		<br />
		<br />
	</div>
</div>


<?php include('template/footer.php'); ?>