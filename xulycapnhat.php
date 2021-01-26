<?php
	$link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi CSDL".mysqli_error());
	mysqli_query($link, "SET character_set_results= utf8");
	$IDPB = $_POST['IDPB'];
	$Name = $_POST['Name'];
	$describe = $_POST['describe'];
	mysqli_select_db($link, "DULIEU");
	$rs = mysqli_query($link, "UPDATE phongban SET Tenpb='$Name', Mota ='$describe' WHERE IDPB=$IDPB");
	header('Location: capnhat.php');
	mysqli_free_result($rs);
	mysqli_close($link);
?>