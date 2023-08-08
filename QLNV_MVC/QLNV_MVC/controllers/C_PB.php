<?php

include_once('../models/M_PB.php');
class C_PB{
    public function invoke(){
        $modelPB= new M_PB();
        if(isset($_GET['view'])){
            $PBs=$modelPB->getAllPB();
            include_once("../views/listPB.php");
        }
        else if(isset($_GET['upd'])){
            $PB=$modelPB->getPBByIDPB($_GET['IDPB']);
            include_once("../views/updatePB.php");
        }
        else if(isset($_GET['UDPB'])){
            $modelPB->updatePB($_POST['IDPB'],$_POST['TenPB'],$_POST['Mota']);
            $PBs=$modelPB->getAllPB();
            include_once("../views/listPB.php");
        }
        else if(isset($_GET['viewAdd'])){
            include_once("../views/addPB.php");
        }
        else if(isset($_GET['addPB'])){
            $modelPB->addPB($_POST['IDPB'],$_POST['TenPB'],$_POST['Mota']);
            $PBs=$modelPB->getAllPB();
            include_once("../views/listPB.php");
        }
    }
}
$cpb=new C_PB();
$cpb->invoke();

?>