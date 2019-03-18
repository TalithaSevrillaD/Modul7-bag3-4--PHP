<?php
	
	include '../connect.php';
	
	$query = "SELECT id_dosen, nama_dosen FROM dosen";
	$result = mysqli_query($connect, $query);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form Create</title>
	</head>
	<body>
		<h1><b>Tambah Data Matakuliah</b></h2>
		<form action = "create.php" method = "POST">
			<table>
				<tr>
					<td><label for ="kode">Kode</label></td>
					<td>:</td>
					<td><input type="text" id="kode" name="kode"></td>
				</tr>
				<tr>
					<td><label for = "nama_matkul">Matakuliah</label></td>
					<td>:</td>
					<td><input type="text" id="nama_matkul" name="nama_matkul"></td>
				</tr>
					<tr>
					<td><label for="sks">SKS</label></td>
					<td>:</td>
					<td><input type="number" id="sks" name="sks"></td>
				</tr>
				<tr>
					<td><label for = "semester">Semester</label></td>
					<td>:</td>
					<td><input type="number" id="semester" name="semester"></td>
				<tr>
					<td><label for="nama_dosen">Dosen Pengajar</label></td>
					<td>:</td>
					<td><select name="id_dosen" id="nama_dosen">
						<option value="NULL">--Pilih salah satu--</option>
						<?php	
							while ($data = mysqli_fetch_assoc($result)) {
								?>
							<option value="<?php echo $data['id_dosen']; ?>">
								<?php echo $data['nama_dosen']; ?>
							</option>
							<?php
							}
							?>
					</select></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
					<input type="submit" value="Simpan" name="btnSimpan">
					</td>
				</tr>

			</table>
		</form>
	</body>
</html>