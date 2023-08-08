<!DOCTYPE html>
<html lang="en">
<head>
    <title>thong tin NV</title>
</head>
<body>
    <?php
        $link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
        mysqli_select_db($link,"dulieu");
        $sql="select * from phongban";
        $result=mysqli_query($link,$sql);
        echo'<table border="1" width="100%">';
        echo'<caption> Du lieu bang phong ban</caption>';
        echo"<tr><th>IDPB</th><th>Ten phong ban</th><th>Mo ta</th><th>Danh sach NV</th><th>Cap nhat</th><tr>";
        while($row=mysqli_fetch_array($result)){
            $ID=$row["IDPB"];
            $TenPB=$row["TenPB"];
            $mota=$row["Mota"];
            echo"<tr>
            <td name=\"IDPB\">$ID</td><td>$TenPB</td><td>$mota</td>
            <td><a href=\"xemthongtinNVPB.php?IDPB=$ID\">Xem thong tin</a></td>
            <td><a href=\"updatePB.php?IDPB=$ID & TenPB=$TenPB &Mota=$mota\">Cap nhat</a></td>
            </tr>";
        }
        echo'</table>';
        echo '<button onclick="window.location=\'addPB.php\'">Them phong ban</button>';
        
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
</body>
</html>