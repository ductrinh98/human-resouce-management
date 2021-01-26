	<?php
	$link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi CSDL".mysqli_error());
	mysqli_query($link, "SET character_set_results = utf8");
	if(isset($_GET['IDPB']))
	{
	$IDPB = $_GET['IDPB'];
	mysqli_select_db($link, "DULIEU");
	$rs = mysqli_query($link, "SELECT * from phongban where IDPB='$IDPB'");
	}
	while($row = mysqli_fetch_array($rs))
	{
		$Name = $row['Tenpb'];
		$describe = $row['Mota'];
	}
	mysqli_free_result($rs);
?>
        <form action='xulycapnhat.php' method='post' name ='update' align ="center">
            <table border='1' align = "center">
				<tr>
                    <td>IDPB</td>
                    <td><input type='hidden' name='IDPB'value ="<?php echo $IDPB; ?>"/> 
						<?php echo $IDPB; ?>
					</td>
                </tr>
                <tr>
                    <td>Tên phòng ban :</td>
                    <td><input type='text' name='Name' value ="<?php echo $Name; ?>" /></td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td>
						<input type='text' name='describe'value ="<?php echo $describe; ?>" />
					</td>
                </tr>
            </table>
            <input type='submit' value='update' name='update' align="center" />
        </form>
 