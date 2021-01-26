<!DOCTYPE html>
<html>
<head>
	<title>header file</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="header">
		<?php include('dangnhap.php')?>
	</div>
		
	<div id = "menu" >
			<ul>
				<li><a href="index.php">Trang chu</a></li>

				<li><a href="#">xem thong tin</a>
					<ul class="dropdown">
						<li><a href="xemTTPB.php" target="fr3">Phong ban</li>
						<li><a href="xemTTNV.php" target="fr3">Nhan vien</li>
					</ul>
				</li>

				<li><a href="timkiem.php" target="fr3">Tim kiem</a></li>
				<?php if(isset($_SESSION["Username"]))
				{
				?>
				<li><a href="capnhat.php" target="fr3">cap nhat</a></li>
				<li><a href="xoattnv.php" target="fr3">xoa</a></li>
				<li><a href="#">chen</a>
				<ul class="dropdown">
				<li><a href="chenpb.php" target="fr3">Phong ban</li>
				<li><a href="chennv.php" target="fr3">Nhan vien</li>
				</ul>
				</li>
				<li><a href="dangxuat.php">Dang xuat</li>
				<?php
				}
				?>		
			</ul>
		</div>
	<div class="leftmenu"></div>
</body>
</html>