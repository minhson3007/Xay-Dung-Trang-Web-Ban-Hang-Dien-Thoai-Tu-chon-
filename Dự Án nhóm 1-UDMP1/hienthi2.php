<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>hienthi</title>
</head>
<body>
<?php include ('connect.php'); ?>
	<?php
		$sql= "select * from sanpham";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result))
		{
			$ma=$row['Code'];
			$ten=$row['Name'];
			$anh=$row['Image'];
			$gia=$row['Price'];
			$tench=$row['Category'];
			$soluong=$row['quantity'];
	 ?>
     <div style="float:left">
     <img src="Image/<?php echo $anh;?>" alt="" width="100px" height="100px">
     <p><b>Mã sản phẩm: <?php  echo $ma;?></b></p>
     <p><b>Tên sản phẩm: <?php  echo $ten;?></b></p>
     <p><b>Giá: <?php  echo $gia;?></b></p>
     <a href="giohang2.php?ma=<?php echo $ma;?>">Mua hàng</a> 
     <a href='file:///C|/xampp/htdocs/toannq/chitiet.php?ma=<?php echo $ma ?>'>Chi tiết</a>
     </div>
     <?php }?>
</body>
</html>