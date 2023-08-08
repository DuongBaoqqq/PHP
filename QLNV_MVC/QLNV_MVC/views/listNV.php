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
            <th>IDNV</th>
            <th>Ho ten</th>
            <th>Dia chi</th>
            <th>IDPB</th>
            <th>Xoa</th>
            <th>Cap nhat</th>
        </tr>
        <?php
            foreach ($NVs as $nv){
                echo "<tr><td>".$nv->IDNV."</td><td>".$nv->hoten."</td><td>".$nv->Diachi."</td><td>".$nv->IDPB."</td>
                <td><a href='../controllers/C_NV.php?del=1&IDNV=$nv->IDNV'>Xoa</a></td>
                <td><a href='../controllers/C_NV.php?upd=1&IDNV=$nv->IDNV'>Cap nhat</a></td></tr>";
            }
        ?> 
    </table>
    <form action="../controllers/C_NV.php?viewAdd=1" method="post">
        <input type="submit" value="Them nhan vien">
    </form>
</body>
</html>