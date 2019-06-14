<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Index</title>
</head>
	<link rel="stylesheet" href="css.css" type="text/css">
<body>
	<div class="tong">
    	<div class="header"><img src="Image/dienthoaididong_02.jpg" width="1000px" height="150px"/></div>
        <div  class="menu">
        	<table style="width:1000px" bgcolor="#00FFFF"> 
          <tr>
            <td width="93" style="padding-left:10px">
              <a href="index2.php">Trang Chủ</a>
            </td>
            <td width="82">
              <a href="#">Liên Hệ</a>
            </td>
            <td width="85">
              <a href="#">CSKH</a>
              <td width="82">
                <a href="#">Giỏ Hàng</a>
              </td>
              <td width="407">
                <li class="search">
                  Search
                  <div class="search-bar">
                    <form>
                      <input type="text" name="search" placeholder="Search...">
                    </form>
                  </div>
                </li>
                </ul>
              </td>
              <td width="223" style="padding-left:85px"><a href="dangnhap2.php">Đăng Nhập</a> /
                <a href="dangky2.php">Đăng Kí</a></td>
          </tr>
        </table>
        </div>
       	<div class="left">
            	<p align="center" style="color:#F00; background:#0FF; padding:10px;" >Sản Phẩm</p>
                <div class="dssanpham">
                	<ul>
                    	<li><a href="#">Apple</a></li>
                        <li><a href="#">Sam Sung</a></li>
                        <li><a href="#">Xiaomi</a></li>
                    </ul>
                </div>
            </div>
        <div class="right">
        	<form method="post" enctype="multipart/form-data">
                <table bgcolor="#00FFFF" width="790px" align="center" cellpadding="5px" style="padding-left:30px">
                    <tr>
                    	<td colspan="2" align="center"><h3>Đăng ký thông tin</h3></td>
                    </tr>
                    <tr>
                    	<td>Họ và tên</td>
                    	<td><input type="text" name="ten"></td>
                    </tr>
                    <tr>
                    	<td>Tài Khoản</td>
                    	<td><input type="text" name="tk"></td>
                    </tr>
                    <tr>
                    	<td>Mật Khẩu</td>
                    	<td><input type="password" name="mk"></td>
                    </tr>
                    <tr>
                    	<td>Nhập lại mật khẩu</td>
                    	<td><input type="password" name="rmk"></td>
                    </tr>	
                    <tr>
                    	<td colspan="2" align="center"><input type="submit" name="ok" value="Đăng ký"></a></td>
                    </tr>
                </table>
          </form>
<?php
	include ('connect.php');
	if (isset($_POST['ok']))
	{
		$ten=$_POST['ten'];
		$tk=$_POST['tk'];
		$mk=$_POST['mk'];
		$rmk=$_POST['rmk'];
		if ($mk==$rmk)
		{
			$sqldk="insert into dangky (Name,Account,Password) values ('$ten','$tk','$mk')";
			$thucthidk=mysqli_query($conn,$sqldk);
			if($thucthidk) { "<script> alert('Dang Ky Thanh cong')</script>";
 							 header ('location:hienthi.php');}
  	 		else echo "<script> alert('Khong thanh cong')</script>";
		}
  
  		else echo "<script> alert('Mật khẩu không giống nhau!!! Nhập lại!!')</script>";
	}
?>
        </div>
        <div class="clr"></div>
        <div class="footer"></div>
    </div>
</body>
</html>