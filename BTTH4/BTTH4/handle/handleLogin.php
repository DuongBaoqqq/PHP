<?php
    $link=mysqli_connect("localhost","root","080101") or die("Could not connect to MySQL Database");
    mysqli_select_db($link,"dulieu");
    $sql="select * from login";
    $result=mysqli_query($link,$sql);
    if(isset($_POST["username"]) && !isset($_POST["password"])){
        $username=$_POST['username'];
        $checkUN=0;
        while($row=mysqli_fetch_array($result)){
            if($username==$row["userName"]) $checkUN=1;
        }
        if($checkUN==0) echo "ten dang nhap khong dung";

    }if(isset($_POST["password"])&& !isset($_POST["username"])){
        $password=$_POST['password'];
        $checkPW=0;
        while($row=mysqli_fetch_array($result)){
            if($password==$row["password"]){
                $checkPW=1;
            } 
        }
        if($checkPW==0) echo "mat khau khong dung";
    }
    if(isset($_POST["password"]) && isset($_POST["username"])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $check=0;
        while($row=mysqli_fetch_array($result)){
            if($password==$row["password"] && $username==$row["userName"]) $check=1;
        }
        if($check==1) echo "cho phep";
    }
?>