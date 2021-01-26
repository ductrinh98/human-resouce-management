<?php
	if(isset($_POST['insert']))
	{

	if(empty($_POST['IDPB']) or empty($_POST['name']))
	{
		$warn = "Không được bỏ trống IDPB và Tên phòng ban";
	}
	else
	{	
		include("Connect_db.php");
		$IDPB =mysqli_real_escape_string($link,$_POST['IDPB']);
		$tenpb=mysqli_real_escape_string($link,$_POST['name']);
		if(isset($_POST['des']))
		{
		$Mota = mysqli_real_escape_string($link,$_POST['des']);
		} else $Mota = "";
		
		$query = "SELECT * From phongban where IDPB ='$IDPB'";
		$rs = mysqli_query($link,$query);
		if(mysqli_num_rows($rs)==1)
		{
			$warn = "IDPB đã tồn tại";			
		}
		if(mysqli_num_rows($rs)==0)
		{
			$query = "INSERT into phongban values('$IDPB','$tenpb','$Mota')";
			$rs = mysqli_query($link,$query);
			$warn= "ban da chen thanh cong 1 ban ghi";
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
				<td>IDPB:</td>
				<td><input type="text" name="IDPB"></td>
			</tr>
			<tr>
				<td>Tên Phòng Ban:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Mô tả:</td>
				<td><input type="text" name="des"></td>
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