<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controllers/C_NV.php?addNV=1" method="post">
        <label for="">IDNV</label>
        <input type="text" name="IDNV" id="IDNV" ><br>
        <label for=""  >Hoten</label>
        <input type="text" name="hoten"id="hoten"><br>
        <label for="">Diachi</label>
        <input type="text" name="Diachi" id="Diachi" ><br>
        <label for="">IDPB</label>
        <?php
            echo "<select id=\"IDPB\" name=\"IDPB\">";
            foreach ($IDPBs as $IDPB){
                echo "<option value=\"$IDPB\">$IDPB</option>";
            }
            echo "</select>";
        ?>
        <br>
        <input type="submit" value="Them nhan vien">
    </form>

</body>
</html>