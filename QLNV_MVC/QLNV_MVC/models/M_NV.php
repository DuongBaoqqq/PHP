<?php
include_once("../models/E_NV.php");
class M_NV{
    public $link ;

    public function __construct(){
        $this->link = mysqli_connect("localhost","root","080101") or die ("Không thể kết nối đến CSDL MYSQL");
        mysqli_select_db($this->link,"dulieu");
    }
    public function getAllNV(){
        $sql="select * from nhanvien";
        $result=mysqli_query($this->link,$sql);
        $i=0;
        while ($row=mysqli_fetch_array($result)){
            $NVs[$i++]= new E_NV($row['IDNV'],$row['hoten'],$row['Diachi'],$row['IDPB']);
        }
        return $NVs;
    }
    public function getSVByIDNV($IDNV){
        $sql="select * from nhanvien where IDNV='$IDNV'";
        $result=mysqli_query($this->link,$sql);
        $i=0;
        while ($row=mysqli_fetch_array($result)){
            $NVs[$i++]= new E_NV($row['IDNV'],$row['hoten'],$row['Diachi'],$row['IDPB']);
        }
        return $NVs[0];
    }
    public function getNVByIDPB($IDPB){
        $sql="select * from nhanvien where IDPB=$IDPB";
        $result=mysqli_query($this->link,$sql);
        $i=0;
        while ($row=mysqli_fetch_array($result)){
            $NVs[$i++]= new E_NV($row['IDNV'],$row['hoten'],$row['Diachi'],$row['IDPB']);
        }
        if($NVs==null) $NVs=[];
        return $NVs;
    }
    public function addNV($IDNV,$hoten,$Diachi,$IDPB){
        $sql="insert into nhanvien (IDNV,hoten,Diachi,IDPB) values('$IDNV','$hoten','$Diachi',$IDPB)";
        $result=mysqli_query($this->link,$sql);
    }
    public function updateNV($IDNV,$hoten,$Diachi,$IDPB){
        $sql="update nhanvien set hoten='$hoten',Diachi='$Diachi',IDPB=$IDPB where IDNV='$IDNV'";
        $result=mysqli_query($this->link,$sql);
    }
    public function deleteNV($IDNV){
        $sql="delete from nhanvien where IDNV='$IDNV'";
        $result=mysqli_query($this->link,$sql);
    }
    public function searchNV($type,$search){
        $sql="select * from nhanvien where $type like '%$search%'";
        $result=mysqli_query($this->link,$sql);
        $i=0;
        while ($row=mysqli_fetch_array($result)){
            $NVs[$i++]= new E_NV($row['IDNV'],$row['hoten'],$row['Diachi'],$row['IDPB']);
        }
        if($i==0) return;
        return $NVs;
    }
}

?>