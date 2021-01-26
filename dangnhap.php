<?php session_start() ?>
<?php
if(isset($_SESSION["Username"]))
	{
		
	}
else if(isset($_POST['submit']))

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
					header("location: http://localhost/last/index.php");
				}
			}				
	}
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method='POST' name ='Login' align = "center" id="formlogin">
            <table id = "table">
                <tr>
                    <td>Tên đăng nhập </td>
                    <td><input type='text' name='Username' /></td>
                </tr>
                <tr>
                    <td>Mật khẩu      </td>
                    <td><input type='password' name='Password' /></td>
                </tr>

				<tr>
					<td colspan="2"><input type='submit' value='submit' name='submit' /> </td>
				</tr>
				<tr>
					
					<td colspan="2">
					<?php
					echo (isset($warn))? $warn:"";
				 	?>
				 	</td>
				</tr>
				<tr>
					<td colspan="2"> <a href="dangky.php"> Đăng ký tài khoản</td>
				</tr>
            </table>         
	</form>
 </body>
</html>
