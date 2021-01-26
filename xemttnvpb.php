<?php
	$mapb = $_REQUEST['IDPB'];
	$ketnoi = mysqli_connect('localhost', 'root', '') or die ("could connect ".mysqli_error());
	mysqli_query($ketnoi, "SET character_set_results=utf8");
	$db = mysqli_select_db($ketnoi, 'dulieu');
	if ($mapb=="")
	{
		$rs = mysqli_query($ketnoi, "SELECT * from nhanvien");
	}
	else
		$rs = mysqli_query($ketnoi, "SELECT * from nhanvien where IDPB='$mapb'");
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
?>
