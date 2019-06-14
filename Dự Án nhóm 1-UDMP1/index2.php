<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Index2</title>
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
               		<a href="giohang2.php">Giỏ Hàng</a>
                </td>     
                <td width="407"><li class="search">
            Search
            		<div class="search-bar">
                		<form>
                    		<input type="text" name="search" placeholder="Search...">
                		</form>
            		</div>
            </td>
            	<td width="223" style="padding-left:85px"><a href="dangnhap2.php">Đăng Nhập</a>
                /<a href="dangky2.php">Đăng Kí</a></td></tr> 
            </table>
        			</div>
                    <div class="mid">
                    	<div class="left">
            	          <p align="center" style="color:#F00; background:#0FF; padding:10px;" >Sản Phẩm</p>	
                             <div class="dssanpham">
                	           <ul>
                    	         <li><a href="Apple2.php">Apple</a></li>
                                   <li><a href="SamSung2.php">Sam Sung</a></li>
                                    <li><a href="Xiaomi2.php">Xiaomi</a></li>
                              </ul>
                            </div>
                       </div>
                      <div class="right">
        	              <p style="text-align:center;color:#F00;background:#0FF;padding:10px;">Tất cả sản phẩm</p>
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
                      </div>
                 </div>
       	
        <div class="clr"></div>
        <div class="footer"></div>
    </div>
</body>
</html>