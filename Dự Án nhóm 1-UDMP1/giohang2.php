<?php $layma=$_GET['ma'];?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>giohang1</title>
</head>
<body>
<?php include ('connect.php'); ?>
	<form method="post">
    	<table border="1">
        	<tr><td colspan="6" align="center">GIỎ HÀNG</td></tr>
        	<tr>
            	<td>Mã sản phẩm</td>
                <td>Tên sản phẩm</td>
                <td>Ảnh sản phẩm</td>
                <td>Giá sản phẩm</td>
                <td>Số Lượng</td>
            </tr>
             <?php 
			$sql="select * from sanpham where Code='$layma'";
			$result=mysqli_query($conn, $sql);
			$row=mysqli_fetch_array($result); 
			?>
            <tr>
            	<td><?php echo $row['Code'];?></td>
                <td><?php echo $row['Name'];?></td>
                <td><img src="Image"<?php echo $row['Image'] ?>" alt="" width="100px" height="50px"></td>
                <td><?php echo $row['Price'];?></td>
                <td><?php echo $row['quantity'];?></td>
                <td><input type="text" name="sl" value=" 
				<?php if(isset($_POST['ok']))
				{echo $_POST['sl'];} else {echo "1";} ?>"><br>
                <?php if ($row['quantity']==0) echo "**Hết sản phẩm này rồi**"; 
				else echo "Tối đa sản phẩm: ".$row['quantity'];?>
                </td>
                <td rowspan="2"><input type="submit" name="ok" value="Cập nhập"></td>
            </tr>
            <tr>
            	<td colspan="4" align="center">Tổng tiền phải trả</td>
                <td colspan="4"><p align="left">
				<?php if(isset($_POST['ok']))
				{
					if($_POST['sl']<=$row['quantity'])
					{$tong=0; $sl=($row['quantity']-$_POST['sl']);
					echo $$tong=$row['Price']*$_POST['sl'].".000 VNĐ";
					$sql2="update sanpham set quantity='$sl' where Code ='$layma'";
					$result=mysqli_query($conn,$sql2);}
					else {echo "<script>alert ('không đủ hàng')</script>";
						  echo $tong=$row['Price'].".000 VNĐ";	}
				}
				else echo $tong=$row['Price'].".000 VNĐ";
					?></td>
            </tr>
            <td colspan="6" align="center"><input type="submit" name="ok" value="Mua"></td>
            </table>
    </form>
    <?php
		if(isset($_POST['ok']))

	?>
</body>
</html>