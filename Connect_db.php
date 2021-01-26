<?php
$link = mysqli_connect("localhost","root","")  or  die("Lỗi kế nối CSDL".mysqli_error());
$db=  mysqli_select_db($link,'dulieu');
mysqli_query($link, "SET character_set_results= utf8");
if($db==false)
{
    echo "không có csdl ";
}
