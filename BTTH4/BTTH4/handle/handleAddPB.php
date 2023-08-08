<?php

$IDPB=$_POST["IDPB"];
$TenPB=$_POST["TenPB"];
$Mota=$_POST["Mota"];
$link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
mysqli_select_db($link,"dulieu");
$sql="insert into phongban (IDPB,TenPB,Mota) values ($IDPB,\"$TenPB\",\"$Mota\")";
$result=mysqli_query($link,$sql);

?>