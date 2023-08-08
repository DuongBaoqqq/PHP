<!DOCTYPE html>
<html lang="en">
<head>
    <title>thong tin NV</title>
</head>
<body>
    <?php
        $Idpb=$_GET['IDPB'];
        $link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
        mysqli_select_db($link,"dulieu");
        $sql="select * from nhanvien where IDPB=$Idpb";
        $result=mysqli_query($link,$sql);
        echo'<table border="1" width="100%">';
        echo'<caption> Du lieu bang nhan vien</caption>';
        echo"<tr><th>ID</th><th>Ho Ten</th><th>Dia chi</th><th>IDPB</th></tr>";
        while($row=mysqli_fetch_array($result)){
            $ID=$row["IDNV"];
            $hoten=$row["hoten"];
            $diachi=$row["Diachi"];
            $IDPB=$row["IDPB"];
            echo"<tr><td>$ID</td><td>$hoten</td><td>$diachi</td><td>$IDPB</td></tr>";
        }
        echo'</table>';        
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
</body>
</html>