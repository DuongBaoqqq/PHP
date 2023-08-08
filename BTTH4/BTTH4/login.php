<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <title>Document</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            background-color:rgb(85, 240, 142);
        }
        .form--style{
            width: 300px;
            height: 120px;
        }
        caption{
            padding-top: 12px;
        }
        div{
            display:flex;
            justify-content:center;
        }

    </style>
</head>
<body>
    <!-- <label for="">User Name</label>
    <input id="username" name="username" type="text"><br/>
    <div id="messageUN"></div>
    <label for="">Password</label>
    <input id="password" name="password" type="text">
    <div id="messagePW"></div></div>
    <button id="login" >Dang nhap</button> -->
    <form action="">
        <table >
            <caption>Login</caption>
            <tr>
                <td>UserName</td>
                <td><input type="text" id="username" name="username"></td>

            </tr>
            <tr>
                <td></td>
                <td><div id="messageUN"></div></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" id="password" name="password"></td>
            </tr> 
            <tr>
                <td></td>
                <td><div id="messagePW"></div></td>
            </tr>
        </table>
        <div>
            <button id="login">Dang nhap</button>
            <button onclick="resetForm()" id="btn_reset">Reset</button>
        </div>
    </form>
    
</body>
<script>
    function resetForm(){
        event.preventDefault();
        document.getElementById("username").value = "";
        document.getElementById("password").value ="";
    }
    function checkUN(){
        let username =document.getElementById("username");
        if(username.value=="") return 0;
        return 1;
    }
    $("#login").click(function(){
        $.ajax({
            method: "POST",
            url:"./handle/handleLogin.php",
            data: {
                username: $("#username").val(),
                password: $("#password").val(),
            },
            success: function(data){
                console.log(data);
                if(data=="cho phep"){
                    window.location="index.php";
                }
            }
        })
    })
    $("#username").blur(function (){
        $.ajax({
            method: "POST",
            url: "./handle/handleLogin.php",
            data:{
                username: $("#username").val(),
                
            },
            success: function(data){
                $("#messageUN").html(data);
            }
        })
    })
    $("#password").blur(function (){
        $.ajax({
            method: "POST",
            url: "./handle/handleLogin.php",
            data:{
                password: $("#password").val(),
            },
            success: function(data){
                if(checkUN()==1){
                    $("#messagePW").html(data);
                }
                else{
                    $("#messagePW").html("chua nhap ten dang nhap");
                }
            }
        })
    })
</script>
</html>