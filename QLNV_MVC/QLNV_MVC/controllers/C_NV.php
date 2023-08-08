<?php

include_once('../models/M_NV.php');
include_once('../models/M_PB.php');
class C_NV{
    public function invoke(){
        $modelNV= new M_NV();
        $modelPB=new M_PB();
        if(isset($_GET['view'])){
            // echo $GET['view'];
            $NVs=$modelNV->getAllNV();
            include_once("../views/listNV.php");
        }
        else if(isset($_GET['ViewNVPB'])){
            $NVs=$modelNV->getNVByIDPB($_GET['ViewNVPB']);
            // if($NVs==null) $NVs=[];
            include_once("../views/listNV.php");
        }
        else if(isset($_GET['search'])){
            include_once("../views/search.html");
        }
        else if(isset($_GET['viewAdd'])){
            $IDPBs=$modelPB->getIDPB();
            include_once("../views/addNV.php");
        }
        else if(isset($_GET['addNV'])){
            $modelNV->addNV($_POST['IDNV'],$_POST['hoten'],$_POST['Diachi'],$_POST['IDPB']);
            $NVs=$modelNV->getAllNV();
            include_once("../views/listNV.php");
        }
        else if(isset($_GET['upd'])){
            // echo $_GET['IDNV'];
            $IDPBs=$modelPB->getIDPB();
            $nv=$modelNV->getSVByIDNV($_GET['IDNV']);
            include_once("../views/updateNV.php");
        }
        else if(isset($_GET['UDNV'])){
            $modelNV->updateNV($_POST['IDNV'],$_POST['hoten'],$_POST['Diachi'],$_POST['IDPB']);
            $NVs=$modelNV->getAllNV();
            include_once("../views/listNV.php");
        }
        else if(isset($_GET['del'])){
            $modelNV->deleteNV($_GET['IDNV']);
            $NVs=$modelNV->getAllNV();
            include_once("../views/listNV.php");
        }
        else if(isset($_GET['searchNV'])){
            $NVs=$modelNV->searchNV($_POST['type'],$_POST['thongtin']);
            include_once("../views/search.html");
            //include_once("../views/listNV.php");
        }
    }
}


$cnv=new C_NV();
$cnv->invoke();

?>