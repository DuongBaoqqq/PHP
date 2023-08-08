<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <title>thong tin NV</title>
</head>
<body>
    <?php
        $link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
        mysqli_select_db($link,"dulieu");
        $sql="select * from nhanvien";
        $result=mysqli_query($link,$sql);
        echo'<table border="1" width="100%">';
        echo'<caption> Du lieu bang nhan vien</caption>';
        echo"<tr><th>ID</th><th>Ho Ten</th><th>Dia chi</th><th>IDPB</th><th>Xoa</th><th>Cap nhat</th><tr>";
        while($row=mysqli_fetch_array($result)){
            $ID=$row["IDNV"];
            $hoten=$row["hoten"];
            $diachi=$row["Diachi"];
            $IDPB=$row["IDPB"];
            echo"<tr><td>$ID</td><td>$hoten</td><td>$diachi</td><td>$IDPB</td>
            <td><input type=\"checkbox\" class=\"checkbox\" value=\"$ID\"></td>
            <td><a href=\"updateNV.php?IDNV=$ID & hoten=$hoten & Diachi=$diachi & IDPB=$IDPB\">Cap nhat</a></td>
            </tr>";
        }
        echo'</table>';
        echo '<button onclick="window.location=\'addNV.php\'">Them nhan vien</button>';
        echo '<button id="Del" >Xoa</button>';
        echo '<button id="DelAll" onclick="checkedAll()">Chon/Bo chon tat ca</button>';
        echo '<div id="test"></div>';
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
    
</body>
<script>
        checkbox=document.getElementsByClassName("checkbox");
        var listCheckbox=[];
        $(".checkbox").change(function(){
            // console.log($(this).val());
            // console.log($(this).is(":checked"));
            if($(this).is(":checked")){
                listCheckbox.push($(this).val());
            }else{
                listCheckbox.pop($(this).val());
            }
            console.log(listCheckbox);
        })
        var check=false;
        function checkedAll(){
            check= !check;
            if(check==true){
                for(var i=0;i<checkbox.length;i++){
                checkbox[i].checked=true;
                }
            } else {
                for(var i=0;i<checkbox.length;i++){
                checkbox[i].checked=false;
                }
            }
            
        }
        // var jsonString= JSON.stringify(valueIsChecked());
        del=document.getElementById("Del");
        // console.log(jsonString);
        $("#Del").click(function(){
            $.ajax({
                method: "POST",
                url: "../handle/handleDel.php",
                data:{ 
                    IDNV: listCheckbox,
                },
                success: function(data){
                    window.location="xemthongtinNV.php";
                }
            })
        });
</script>
</html>