<?php
	$link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi CSDL".mysqli_error());
	mysqli_query($link, "SET character_set_results=utf8");
	mysqli_select_db($link, "DULIEU");
	$sql = "SELECT * FROM nhanvien";
	$result = mysqli_query($link, $sql);

	echo '<table border="1" width="100%">';
	echo '<caption>Dữ liệu bảng nhân viên</caption>';
	echo '<tr><th> IDNV</th><th>Hoten</th><th>IDPB</th><th>Diachi</th></tr>';
	while($row = mysqli_fetch_array($result))
	{
		
		echo '<tr><td>'.$row['IDNV'].'</td><td>'.$row['Hoten'].'</td><td>'.$row['IDPB'].'</td><td>'.$row['Diachi'].'</td></tr>';
		
	} 
	echo '</table>';
	mysqli_free_result($result);
	mysqli_close($link);
 ?>
