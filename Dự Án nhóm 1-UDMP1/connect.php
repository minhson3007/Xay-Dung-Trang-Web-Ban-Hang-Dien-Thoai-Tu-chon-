<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Connect.php</title>
</head>
<body>
	<?php
		$conn= mysqli_connect ('localhost','root','','quanly');
		mysqli_query($conn,'setnames "utf8"'); 
	 ?>
</body>
</html>