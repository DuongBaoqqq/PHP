<?php
$IDNV=$_POST["IDNV"];
$TenNV=$_POST["TenNV"];
$Diachi=$_POST["Diachi"];
$IDPB=$_POST["IDPB"];
$link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
mysqli_select_db($link,"dulieu");
$sql="update nhanvien set hoten=\"$TenNV\", Diachi=\"$Diachi\", IDPB=\"$IDPB\" where IDNV=$IDNV";
$result=mysqli_query($link,$sql);
echo "cap nhat thanh cong";
?>