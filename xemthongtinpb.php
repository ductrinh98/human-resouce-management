<?php
$link=mysqli_connect("localhost","root","") or die("could not connect".msqli_error());
mysqli_query($link,"SET character_set_results=utf8");
mysqli_select_db($link,"dulieu");
$sql="Select * from phongban";
$result =mysqli_query($link,$sql);

echo '<table border="1" width="100%">';
echo '<caption>Du lieu bang Phong Ban</caption>';
echo '<TR><TH>IDPB</TH><TH>Ten phong ban</TH><TH>Mo ta</TH></TR>';
while ($row=mysqli_fetch_array($result))
{
    echo '<TR><TD>'.$row['IDPB'].'</TD><TD>'.$row['Tenpb'].'</TD><TD>'.$row['Mota'].'</TD></TR>';
}
echo '</table>';
mysqli_free_result($result);
mysqli_close($link);
?>