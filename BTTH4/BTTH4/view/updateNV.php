<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <title>Document</title>
</head>
<body>
    <?php
        $IDNV=$_GET["IDNV"];
        $Hoten=$_GET["hoten"];
        $Diachi=$_GET["Diachi"];
        $IDPB=$_GET["IDPB"];
        $link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
        mysqli_select_db($link,"dulieu");
        $sql="select * from nhanvien";
        $sql1="select * from phongban";
        $result=mysqli_query($link,$sql);
        $result1=mysqli_query($link,$sql1);
        echo "<label >IDNV</label>
            <input type=\"text\" id=\"IDNV\" value=\"$IDNV \" ><br>
            <label>TenNV</label>
            <input type=\"text\" id=\"TenNV\" value=\"$Hoten \"><br>
            <label >Dia chi</label>
            <input type=\"text\" id=\"Diachi\" value=\"$Diachi \" ><br>
            <label>IDPB</label>";
        echo "<select id=\"IDPB\" name=\"IDPB\">";
        while($row=mysqli_fetch_array($result1)){
            $IDPB1=$row["IDPB"];
            echo "<option value=\"$IDPB1\">$IDPB1</option>";
        }
        echo "</select><br>";
        echo "<button id=\"update\">Cap nhat</button>";
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
</body>
<script>
    $("#update").click(function(){
        $.ajax({
            method:"POST",
            url: "../handle/handleUDNV.php",
            data:{
                IDNV:$("#IDNV").val(),
                TenNV:$("#TenNV").val(),
                Diachi:$("#Diachi").val(),
                IDPB:$("#IDPB").val(),
            },
            success: function(data){
                console.log(data);
                // $("#test").html(data);
                window.location='xemthongtinNV.php';
            }
        })
    })
</script>
</html>