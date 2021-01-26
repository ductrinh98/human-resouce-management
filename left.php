
<html>
	<head>
	<title>Left</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		TRANG CHỦ
		<form name="Formtrangchu" method="post">
			<table>
				<tr><td><br><input type="hidden" name="xemnv">
					<a href="xemttnv.php" target= "fr3">Xem thông tin nhân viên</a></td></tr>
				<tr><td><br><input type="hidden" name="xempb">
					<a href="xemttpb.php" target= "fr3">Xem thông tin phòng ban</a></td></tr>
				<tr><td><br><input type="hidden" name="timkiem">
					<a href="timkiem.php" target= "fr3">Tìm kiếm thông tin nhân viên</a></td></tr>
				<tr><td><br><input type="hidden" name="chenpb">
					<a href="chenpb.php" target="fr3">Chèn Phòng ban</a></td></tr>
				<tr><td><br><input type="hidden" name="chennv">
					<a href="Chennv.php" target="fr3">Chèn Nhân viên</a></td></tr>
				<tr><td><br><input type="hidden" name="capnhat">
					<a href="capnhat.php" target="fr3">Cập nhật phòng ban</a></td></tr>
				<tr><td><br><input type="hidden" name="xoanv">
					<a href="xoattnv.php" target="fr3">Xóa Nhân viên</a></td></tr>
				<tr><td><?php echo (isset($warn))?$warn:""; ?></td></tr>
			</table>	
		</form>
	</body>
</html>
