<html>
<head>
<title>Tambah Siswa</title>
</head>
<body>
	<form action="proses_tambahsiswa.php" method="POST">
		<table border="2">
			<tr>
				<td><label for="no_induk">Nomor Induk</label></td>
				<td>:</td>
				<td><input type="text" name="induk" size="30"></td>
			</tr>
			<tr>
				<td><label for="siswa">Nama</label>Nama</td>
				<td>:</td>
				<td><input type="text" name="name" size="30"></td>
			</tr>
			<tr>
				<td><label for="date">Tanggal Lahir</label></td>
				<td>:</td>
				<td><input type="date" name="date"></td>
			</tr>
			<tr>
				<td><label for="pass">Password</label></td>
				<td>:</td>
				<td><input type="text" name="pass" size="30"></td>
			</tr>
			<tr>
				<td><label for="status">Status</label></td>
				<td>:</td>
				<td>
				<input type="radio" name="status" value="1">
				<label for="aktif">Aktif</label>
				<input type="radio" name="status" value="0">
				<label for="unaktif">Tidak Aktif</label>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
