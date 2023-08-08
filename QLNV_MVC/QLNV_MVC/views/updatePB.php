<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controllers/C_PB.php?UDPB=1" method="post">
        <label for="">IDPB</label>
        <input type="text" name="IDPB" id="IDPB" value="<?php echo $PB->IDPB; ?>" ><br>
        <label for=""  >TenPB</label>
        <input type="text" name="TenPB"id="TenPB" value="<?php echo $PB->TenPB ?>"><br>
        <label for="">Mo ta</label>
        <input type="text" name="Mota" id="Mota" value="<?php echo $PB->Mota ?>"><br>
        <br>
        <input type="submit" value="Cap nhat">
    </form>

</body>
</html>