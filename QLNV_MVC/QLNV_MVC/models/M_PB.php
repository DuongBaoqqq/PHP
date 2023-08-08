<?php
include_once("../models/E_PB.php");
class M_PB{
    public $link ;

    public function __construct(){
        $this->link = mysqli_connect("localhost","root","080101") or die ("Không thể kết nối đến CSDL MYSQL");
        mysqli_select_db($this->link,"dulieu");
    }
    public function getAllPB(){
        $sql="select * from phongban";
        $result=mysqli_query($this->link,$sql);
        $i=0;
        while ($row=mysqli_fetch_array($result)){
            $PBs[$i++]= new E_PB($row['IDPB'],$row['TenPB'],$row['Mota']);
        }
        return $PBs;
    }
    public function getPBByIDPB($IDPB){
        $sql="select * from phongban where IDPB = $IDPB";
        $result=mysqli_query($this->link,$sql);
        $i=0;
        while ($row=mysqli_fetch_array($result)){
            $PBs[$i++]= new E_PB($row['IDPB'],$row['TenPB'],$row['Mota']);
        }
        return $PBs[0];
    }
    public function getIDPB(){
        $sql="select IDPB from phongban";
        $result=mysqli_query($this->link,$sql);
        $i=0;
        while($row=mysqli_fetch_array($result)){
            $IDPBs[$i++]= $row['IDPB'];
        }
        return $IDPBs;
    }
    public function addPB($IDPB,$TenPB,$Mota){
        $sql="insert into phongban (IDPB,TenPB,Mota) values ($IDPB,'$TenPB','$Mota')";
        $result=mysqli_query($this->link,$sql);
    }
    public function updatePB($IDPB,$TenPB,$Mota){
        $sql="update phongban set TenPB='$TenPB',Mota='$Mota' where IDPB=$IDPB";
        $result=mysqli_query($this->link,$sql);
    }
    
}


?>