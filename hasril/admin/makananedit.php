<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions2.php';
	
	$id_makanan = $_GET["id_makanan"];

	$makanan = query("SELECT * FROM makanan WHERE id_makanan = $id_makanan")[0];
if (isset($_POST["submit"])) {
	
	if(ubah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Diubah');
				document.location.href = 'index.php?p=makanan';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Diubah')
				document.location.href = 'index.php?p=makanan';
		</script>";
	}

}
?>
<html>
	<head>
		<title>Ubah Data Makanan</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	</head>
	<style> 
		.image{
			width: 100%;
			padding: 10px;
		}
	</style>
	<body>
		<div class="container">
			<div class="card-panel">
			<h5 style="font-family: arial;">Ubah Data Makanan</h5>
		
		<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id_makanan" value="<?= $makanan["id_makanan"]; ?>" required>
				<input type="hidden" name="gambar_makanan" value="<?= $makanan["gambar_makanan"]; ?>" required>
			<ul>
			<li>
				<label for="nama_makanan">Nama makanan :</label>
				<input type="text" name="nama_makanan" id="nama_makanan" value="<?= $makanan["nama_makanan"]; ?>" required>
			</li>
			<li>
				<label for="gambar_makanan">Gambar makanan :</label>
				<img src="">
				<input type="file" name="gambar_makanan" id="gambar_makanan" required class="image">
				<hr>
			</li>
			<li>
				<label for="deskripsi_makanan">Deskripsi makanan :</label>
				<input type="text" name="deskripsi_makanan" id="deskripsi_makanan" value="<?= $makanan["deskripsi_makanan"]; ?>" required>
			</li>
			<li>
				<label for="asal_makanan">Asal makanan :</label>
				<input type="text" name="asal_makanan" id="asal_makanan" value="<?= $makanan["asal_makanan"]; ?>" required>
			</li>
			<li>
				<label for="bahan_makanan">Bahan makanan :</label>
				<input type="text" name="bahan_makanan" id="bahan_makanan" value="<?= $makanan["bahan_makanan"]; ?>" required>
			</li>
			<button name="submit" type="submit" class="waves-effect waves-light btn">Edit Data Makanan</button>
		</ul>
	</form>
</div>
</div>
	</body>
</html>