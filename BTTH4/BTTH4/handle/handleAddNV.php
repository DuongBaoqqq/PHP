<?php

$IDNV=$_POST["IDNV"];
$hoten=$_POST["hoten"];
$Diachi=$_POST["Diachi"];
$IDPB=$_POST["IDPB"];
$link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
mysqli_select_db($link,"dulieu");
$sql="insert into nhanvien (IDNV,hoten,Diachi,IDPB) values ($IDNV,\"$hoten\",\"$Diachi\",$IDPB)";
$result=mysqli_query($link,$sql);
echo $sql;

?>