

 	<?php
	$link = mysqli_connect("localhost", "root", "") or die ("ko th ket noi CSDL".mysqli_error());
	mysqli_query($link, "SET character_set_results = utf8");
	mysqli_select_db($link, "DULIEU");
	$sql = "SELECT * FROM phongban";
	$result = mysqli_query($link, $sql);

	echo '<table border="1" width="100%">';
	echo '<caption>Dữ liệu bảng phòng ban</caption>';
	echo '<tr><th>IDPB</th><th>Tenpb</th><th>Mota</th></tr>';
	while($row = mysqli_fetch_array($result))
	{		
		echo '<tr>
				<td align="center"> 
					<a href="form_capnhat.php?IDPB='.$row['IDPB'].'">'.$row['IDPB'].'</a>
				</td>
				<td>'.$row['Tenpb'].'</td>
				<td>'.$row['Mota'].'</td>
			</tr>';
	} 
	echo '</table>';
	mysqli_free_result($result);
	mysqli_close($link);
 ?>
