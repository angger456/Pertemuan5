<?php 
	function salam ($nama) {
		return "selamat datang, $nama !!!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan function</title>
</head>
<body>
	<h1><?= salam("JODI ANGGER"); ?></h1>
</body>
</html>