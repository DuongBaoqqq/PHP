<?php
    $type=$_POST['type'];
    // echo $type;
    $sql="";
    $thongtin=$_POST['thongtin'];


    if($thongtin!=""){
        $sql="select * from nhanvien where $type=\"$thongtin\"";
    }else{
        $sql="select * from nhanvien"; 
    }
    
    $link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
    mysqli_select_db($link,"dulieu");
    $result=mysqli_query($link,$sql);
    $str="";
    while($row=mysqli_fetch_array($result)){
        $ID=$row["IDNV"];
        $hoten=$row["hoten"];
        $diachi=$row["Diachi"];
        $IDPB=$row["IDPB"];
        $str.="{\"ID\":$ID,\"hoten\":\"$hoten\",\"diachi\":\"$diachi\",\"IDPB\":$IDPB},";
    }
    if($str==""){
        echo "";
    }
    else{
        echo "[$str]";
    }
    

?>