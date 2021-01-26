<?php 
session_start();
if(isset($_SESSION["Username"]))
	{
		echo "Xin chao ".$_SESSION["Username"];
	}
else 
	if(isset($_POST['submit']))

	{
			if(empty($_POST['Username']) or empty($_POST['Password']))
			{
				$warn = "Bạn phải điền đầy đủ tên đăng nhập và mật khẩu";
			}
			else
			{
				include("Connect_db.php");
				$user = mysqli_real_escape_string($link, $_POST['Username']);
				$pass = mysqli_real_escape_string($link, $_POST['Password']);
				$pass = md5($pass);
				$query = " SELECT * FROM admin where username = '$user' and password = '$pass' ";
				$rs = mysqli_query($link, $query);
				if(mysqli_num_rows($rs)==1)
				{
					$row = mysqli_fetch_array($rs);
					$_SESSION["Username"] = $row['username'];
					header("Location: dangxuat.php");
					echo "xin chao ".$_SESSION['Username'];
				}
			}			
			
	}
?>			
			