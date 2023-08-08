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
    <label for="">IDNV</label>
    <input type="text" id="IDNV" ><br>
    <label for=""  >Hoten</label>
    <input type="text" id="hoten"><br>
    <label for="">Diachi</label>
    <input type="text" id="Diachi" ><br>
    <label for="">IDPB</label>
    <!-- <input type="text" id="IDPB" ><br> -->
    <?php
        $link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
        mysqli_select_db($link,"dulieu");
        $sql="select * from phongban";
        $result=mysqli_query($link,$sql);
        echo "<select id=\"IDPB\" name=\"IDPB\">";
        while($row=mysqli_fetch_array($result)){
            $IDPB=$row["IDPB"];
            echo "<option value=\"$IDPB\">$IDPB</option>";
        }
        echo "</select>";
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
    <br>
    <button id="addNV">Them</button>
    <div id="test"></div>
</body>
<script>
    // IDNV=document.getElementById("IDNV")
    // hoten=document.getElementById("hoten")
    // Diachi=document.getElementById("Diachi")
    // IDPB=document.getElementById("IDPB")
    $("#addNV").click(function(){
        if(IDNV.value!=""){
             $.ajax({
            method: "POST",
            url:"../handle/handleAddNV.php",
            data: {
                IDNV: $("#IDNV").val(),
                hoten: $("#hoten").val(),
                Diachi:$("#Diachi").val(),
                IDPB:$("#IDPB").val()
            },
            success: function(data){
                window.location="xemthongtinNV.php";
                // console.log(data);
                // $("#test").html(data);
            }
        })
        }
    })
</script>
</html>