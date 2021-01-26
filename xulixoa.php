<?php
	$link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi CSDL".mysqli_error());
	mysqli_query($link, "SET character_set_results= utf8");
	$db_selected = mysqli_select_db($link,"dulieu");
	if(isset($_REQUEST['checkbox']))
	{
	$list = $_REQUEST['checkbox'];
	
	for ($i = 0; $i < count($list); $i++) {
		$sql = "DELETE FROM nhanvien WHERE IDNV = '$list[$i]'";
		$rs = mysqli_query($link, $sql);
		if ( !$rs ) die("Không thể thực hiện được câu lệnh SQL:".mysqli_error($link));
	}
	}
	else
	{
		$IDNV = $_REQUEST['IDNV'];
		$sql = "DELETE FROM nhanvien WHERE IDNV = '$IDNV'";
		$rs= mysqli_query($link,$sql);
		if ( !$rs ) die("Không thể thực hiện được câu lệnh SQL:".mysqli_error($link));
	}
	header('Location: xoattnv.php');
	mysqli_free_result($rs);
	mysqli_close($link);
?>