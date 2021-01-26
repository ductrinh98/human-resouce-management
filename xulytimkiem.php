
		<?php
	$idnv = $_POST['txtidnv'];
	$hoten = $_POST['txthoten'];
	if($idnv ==""||$hoten=="")
	{
		header('Content-Type: text/html; charset=UTF-8');
		header("Location:timkiem.php");
	}
	else
	{
		$ketnoi = mysqli_connect("localhost", "root", "") or die("Could not connect".mysqli_error());
		mysqli_query($ketnoi, "SET character_set_results=utf8");
		$db_select = mysqli_select_db($ketnoi, "DULIEU");
		$rs = mysqli_query($ketnoi, "SELECT * FROM nhanvien Where IDNV='$idnv' or Hoten='$hoten'");

		echo '<table border="1" width="100%">';
		echo '<caption>Dữ liệu bảng nhân viên</caption>';
		echo '<tr><th> IDNV</th><th>Hoten</th><th>IDPB</th><th>Diachi</th></tr>';
		while($row = mysqli_fetch_array($rs))
		{
		
			echo '<tr><td>'.$row['IDNV'].'</td><td>'.$row['Hoten'].'</td><td>'.$row['IDPB'].'</td><td>'.$row['Diachi'].'</td></tr>';
		} 
		echo '</table>';
		mysqli_free_result($rs);
		mysqli_close($ketnoi);
	}
?>
	