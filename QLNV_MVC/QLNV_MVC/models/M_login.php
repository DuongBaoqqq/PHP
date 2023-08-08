<?php

include_once('../models/E_Login.php');
class M_login{
    public $link ;

    public function __construct(){
        $this->link = mysqli_connect("localhost","root","080101") or die ("Không thể kết nối đến CSDL MYSQL");
        mysqli_select_db($this->link,"dulieu");
    }

    public function getAccount($username,$password){
        if($username==null || $password==null) return;
        $sql="select * from login where userName='$username' and password='$password'";
        $result = mysqli_query($this->link,$sql);
        if(!$result) return;
        $i=0;
        while ($row = mysqli_fetch_array($result))
        $account[$i++] = new E_Login($row['userName'],$row['password']);
        return $account[0];
    }

}


?>