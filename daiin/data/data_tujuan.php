<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 20px;">No</th>
		<th style="width: 40px;">Kode Tujuan</th>
		<th style="width: 80px;">Kota Tujuan</th>
		<th style="width: 80px;">Nomor Tiket</th>
		<th style="width: 30px;">Delete</th>
		<th style="width: 30px;">Edit</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_tujuan ORDER BY no_tiket ASC"; 
	$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
	$no=1;
	while ($data = mysqli_fetch_array ($hasil)){
		$id=$data['no_tujuan'];
		?>
		<tr>

			<td><?php echo $no++?></td>
			<td><?php echo $data['no_tujuan'];?></td>
			<td><?php echo $data['kota_tujuan']; ?></td>
			<td><?php echo $data['no_tiket']; ?></td>
			<td class="delete">
				<a href="deletetujuan.php?id_tujuan=<?php echo $id ?>" onclick="return confirm('Apakah anda yakin?')" class="btn-aksi"> <img src="img/silang.png "width="35px" alt="Delete Data"></a>
			</td>
			<td class="edit">
				<a href="edittujuan.php?id_tujuan=<?php echo $id?>" class="btn-aksi"><img src="img/editt2.png" class="card-img-top" width="35px" alt="Edit Data"></a>
			</td>
			
		</tr>
		<?php } ?>
	</table>
