<!DOCTYPE html>
<html lang="en">
<head>
    <title>thong tin NV</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <input type="radio" class="type" name="type" value="IDNV" checked> IDNV
    <input type="radio" class="type" name="type" value="hoten"> TenNV
    <input type="radio" class="type" name="type" value="Diachi"> Que Quan
    <p><input type="text" id="thongtin"> <button id="submit">Tim kiem</button>
    <div id="handleSearch"></div>
</body> 
<script>
    function checkType() {
        type=document.getElementsByClassName("type");
        for (var i=0; i<type.length; i++) {
            if(type[i].checked) return type[i].value;
        }
        return type[0].value;
    }
    function createTable(data){
        obj=JSON.parse(data);
        html='<table border="1" width="100%">';
        html+="<tr><th>ID</th><th>Ho Ten</th><th>Dia chi</th><th>IDPB</th></tr>";
        for(var i=0;i<obj.length;i++){
            html+='<tr><td>'+obj[i].ID+'</td><td>'+obj[i].hoten+'</td><td>'+obj[i].diachi+'</td><td>'+obj[i].IDPB+'</td></tr>'
        }
        html+='</table>'
        return html;
    }
    $("#submit").click(function(){
        $.ajax({
        method: "POST",
        url: "../handle/handleSearch.php",
        data: {
            type: checkType(),
            thongtin: $("#thongtin").val(),
        },
        success: function (data){
            if(data!=""){
                data=data.substr(0, data.length-2);
                data=data+"]";
                $("#handleSearch").html(createTable(data));
            }
            else{
                $("#handleSearch").html(data);
            }
            console.log(data);
        }
    })
    
    })

</script>
</html>