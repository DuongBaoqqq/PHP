<?php
$IDPB=$_POST["IDPB"];
$TenPB=$_POST["TenPB"];
$Mota=$_POST["Mota"];
$link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
mysqli_select_db($link,"dulieu");
$sql="update phongban set TenPB=\"$TenPB\", Mota=\"$Mota\" where IDPB=$IDPB";
$result=mysqli_query($link,$sql);
echo "cap nhat thanh cong";
?>