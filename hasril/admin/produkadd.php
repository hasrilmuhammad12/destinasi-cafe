<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions.php';
if (isset($_POST["submit"])) {
	
	if(tambah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href = 'index.php?p=produk';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Ditambahkan')
				document.location.href = 'index.php';
		</script>";
	}

}
?>
<html>
	<head>
		<title>Tambah Data Minuman</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	</head>
	<body>
		<div class="container">
			<div class="card-panel">
			<h5 style="font-family: arial;">Tambah Data Minuman</h5>
		
		<form action="" method="post" enctype="multipart/form-data">
			<ul>
			<li>
				<label for="nama_produk">Nama Minuman :</label>
				<input type="text" name="nama_produk" id="nama_produk">
			</li>
			<li>
				<label for="gambar_produk">Gambar Minuman :</label>
				<input type="file" name="gambar_produk" id="gambar_produk">
			</li>
			<li>
				<label for="deskripsi_produk">Deskripsi Minuman :</label>
				<input type="text" name="deskripsi_produk" id="deskripsi_produk">
			</li>
			<li>
				<label for="asal_produk">Asal Minuman :</label>
				<input type="text" name="asal_produk" id="asal_produk">
			</li>
			<li>
				<label for="bahan_produk">Bahan Minuman :</label>
				<input type="text" name="bahan_produk" id="bahan_produk">
			</li>
			<button name="submit" type="submit" class="waves-effect waves-light btn">Tambah Data Minuman</button>
		</ul>
	</form>
</div>
</div>
	</body>
</html>