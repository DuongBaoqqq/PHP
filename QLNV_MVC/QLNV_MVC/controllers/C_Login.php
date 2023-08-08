<?php
include_once('../models/M_login.php');
class C_Login{
    public function invoke(){
        $modelLogin= new M_Login();
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(isset($username) && isset($password)){
            $account=$modelLogin->getAccount($username,$password);
            if($account->username && $account->password){   
                // include_once("../index.html");
                echo "<script> window.location=\"../index.html\"; </script>";

            }
        }
    }

}

$C_log= new C_Login();
$C_log->invoke();
?>