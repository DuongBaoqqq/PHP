<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th>IDPB</th>
            <th>TenPB</th>
            <th>Mo ta</th>
            <th>Xem thong tin nhan vien</th>
            <th>Cap nhat</th>
        </tr>
        <?php
            foreach ($PBs as $pb){
                echo "<tr><td>".$pb->IDPB."</td><td>".$pb->TenPB."</td><td>".$pb->Mota."</td>
                <td><a href='../controllers/C_NV.php?ViewNVPB=\"$pb->IDPB\"'>Xem nhan vien phong ban</a></td>
                <td><a href='../controllers/C_PB.php?upd=1&IDPB=$pb->IDPB'>Cap nhat</a></td></tr>";
            }
        ?> 
    </table>
    <form action="../controllers/C_PB.php?viewAdd=1" method="post">
        <input type="submit" value="Them PB">
    </form>
</body>
</html>