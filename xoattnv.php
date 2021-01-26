<?php
	include"Connect_db.php";
	$sql= "SELECT * from nhanvien";
	$rs = mysqli_query($link,$sql);
	echo '<FORM name="FormDel" METHOD="post">';
	echo '<table border="1" width="100%">';
	echo '<caption>Dữ liệu bảng nhân viên</caption>';
	echo '<tr>
			<th>IDNV</th>
			<th>Họ tên</th>
			<th>IDPB</th>
			<th>Địa chỉ</th>
			<th>Xóa</th>
			<th>Xóa Nhiều</th>
		</tr>';
	while($row = mysqli_fetch_array($rs))
	{
		
		echo '<tr>
				<td>'.$row['IDNV'].'</td>
				<td>'.$row['Hoten'].'</td>
				<td>'.$row['IDPB'].'</td>
				<td>'.$row['Diachi'].'</td>
				<td align= "center"><a href="xulixoa.php?IDNV='.$row['IDNV'].'">xóa</a></td>
				<td align = "center"><input type = "checkbox" name= "checkbox[]" value='.$row['IDNV'].'>
				</td>
			</tr>';
	} 
	echo '</table>';
	echo "<h3 align='center'><input type='submit' name='delete' value='Xóa Nhiều'></h3>";
	echo "</Form";
	mysqli_free_result($rs);
	mysqli_close($link);
?>