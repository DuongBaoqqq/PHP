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
    <label for="">IDPB</label>
    <input type="text" id="IDPB" ><br>
    <label for=""  >TenPB</label>
    <input type="text" id="TenPB"><br>
    <label for="">Mota</label>
    <input type="text" id="Mota" ><br>
    <button id="addPB">Them</button>
    <div id="test"></div>
</body>
<script>
    var IDPB=document.getElementById("IDPB");
    var TenPB=document.getElementById("TenPB");
    var mota=document.getElementById("Mota");
    $("#addPB").click(function(){
        if(IDPB.value!=""){
            $.ajax({
                method: "POST",
                url: "../handle/handleAddPB.php",
                data: {
                    IDPB: IDPB.value,
                    TenPB: TenPB.value,
                    Mota:mota.value,
                },
                success: function(data){
                    window.location="xemthongtinPB.php";
                }
            })
        }
    })
    
</script>
</html>