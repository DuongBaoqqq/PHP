<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controllers/C_NV.php?UDNV=1" method="post">
        <label for="">IDNV</label>
        <input type="text" name="IDNV" id="IDNV" value="<?php echo $nv->IDNV; ?>" ><br>
        <label for=""  >Hoten</label>
        <input type="text" name="hoten"id="hoten" value="<?php echo $nv->hoten ?>"><br>
        <label for="">Diachi</label>
        <input type="text" name="Diachi" id="Diachi" value="<?php echo $nv->Diachi ?>"><br>
        <label for="">IDPB</label>
        <?php
            echo "<select id=\"IDPB\" name=\"IDPB\" >";
            foreach ($IDPBs as $IDPB){
                if($IDPB!=$nv->IDPB){
                    echo "<option value=\"$IDPB\">$IDPB</option>";  
                }else echo "<option value=\"$IDPB\" selected=\"selected\" >$IDPB</option>";
            }
            echo "</select>";
        ?>
        <br>
        <input type="submit" value="Cap nhat">
    </form>

</body>
</html>