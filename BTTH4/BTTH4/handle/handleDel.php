<?php

$IDNV=$_POST["IDNV"];
$link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
mysqli_select_db($link,"dulieu");
foreach($IDNV as $id){
    $sql="delete from nhanvien where IDNV=$id";
    $result=mysqli_query($link,$sql);
}

?>