<?php
	
	if(isset($_POST['dangky']))
	{
		if(empty($_POST['Username']) or empty($_POST['Password']))
		{
			$error = "Bạn phải điền đầy đủ tên đăng nhập và mật khẩu";
		}
		else
		{
			include("Connect_db.php");
			$name = mysqli_real_escape_string($link, $_POST['Username']);
			$password = mysqli_real_escape_string($link, $_POST['Password']);
			$password = md5($password);
			$query = "SELECT * From admin where username ='$name'";
			$rs = mysqli_query($link,$query);
		if(mysqli_num_rows($rs)==1)
		{
			$error = "tài khoản đã tồn tại";			
		}
		if(mysqli_num_rows($rs)==0)
		{
		$query = "INSERT INTO admin(`username`,`password`) values ('$name','$password')";
		$rs = mysqli_query($link,$query);	
		$error= "ban da dang ky thanh cong tai khoan";
		}
		}
	}
?>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body align = "center" bgcolor="189EFF">
        <form method='POST' name ='Login' align="Right">
            <table  align = "Right">
                <tr>
                    <td>Tên đăng nhập :</td>
                    <td><input type='text' name='Username' /></td>
                </tr>
                <tr>
                    <td>Mật khẩu :</td>
                    <td><input type='password' name='Password' /></td>
                </tr>
				
				<tr>
					<td colspan="2" align="center">
					<?php
					echo (isset($error))? $error:"";
				 	?>
				 	</td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type='submit' value='Đăng ký' name='dangky' /> </td>
				</tr>
				<tr align="center">
					<td colspan="2"> <a href="dangnhap.php"> Đăng Nhập</td>
				</tr>
            </table>         
	</form>
    </body>
</html>