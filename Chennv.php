<?php

if(isset($_POST['insert']))
{

	if(empty($_POST['IDNV']) or empty($_POST['name']) or empty($_POST['IDPB']) or empty($_POST['DiaChi']))
	{
		$warn = "Không được bỏ trống trường nào";
	}
	else
	{	
		include("Connect_db.php");
		$IDNV =mysqli_real_escape_string($link,$_POST['IDNV']);
		$Tennv=mysqli_real_escape_string($link,$_POST['name']);
		$IDPB =mysqli_real_escape_string($link,$_POST['IDPB']);
		$DiaChi= mysqli_real_escape_string($link,$_POST['DiaChi']);
		
		
		$query = "SELECT * From nhanvien where IDNV ='$IDNV'";
		$rs = mysqli_query($link,$query);
		if(mysqli_num_rows($rs)==1)
		{
			$warn = "IDNV đã tồn tại";			
		}
		if(mysqli_num_rows($rs)==0)
		{	
			$query = "SELECT * From phongban where IDPB ='$IDPB'";
			$rs = mysqli_query($link,$query);
			if(mysqli_num_rows($rs)==1)
			{
				$query = "INSERT into nhanvien values('$IDNV','$Tennv','$IDPB','$DiaChi')";
				$rs = mysqli_query($link,$query);
				$warn = "Bạn đã thêm thành công 1 bản ghi mới";
			}
			else $warn= "Không có phòng ban phù hợp";
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Chèn nhân viên phòng ban</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<form method="post" name="formInsert">
		<table align="center">
			<tr>
				<td>IDNV:</td>
				<td><input type="text" name="IDNV"></td>
			</tr>
			<tr>
				<td>Tên Nhân viên:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>IDPB:</td>
				<td><input type="text" name="IDPB"></td>
			</tr>
			<tr>
				<td>Địa chỉ:</td>
				<td><input type="text" name="DiaChi"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="insert" value="Chèn"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<?php
					echo (isset($warn))?$warn:"";
					?>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>