<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

		$conn = mysqli_connect('localhost','root','','siswa');

		if (!$conn){
			die ("Gagal Terkoneksi ".mysqli_connect_error());
		}

		$id 			= '';
		$nama   		= $_POST['nama'];
		$jeniskelamin	= $_POST['jenis_kelamin'];
		$nik 			= $_POST['nik'];
		$nisn 			= $_POST['nisn'];
		$tempat			= $_POST['tempat'];
		$lahir			= $_POST['bday'];

		$sql = "INSERT INTO datasiswa VALUES ('$id','$nama','$jeniskelamin','$nik','$nisn','$tempat, $lahir')";

		if (mysqli_query($conn, $sql)){

			echo "Data Berhasil Ditambahkan";

		} else {

			echo "Error : " .$sql. "<br>" . mysqli_error($conn);
		}

	?>

</body>
</html>